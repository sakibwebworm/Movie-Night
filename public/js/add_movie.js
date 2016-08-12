angular.module('movieFinder', [], 
        //changing angular templating to work along with blade       
        function($interpolateProvider) {
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
    })
    .controller('movieCtrl', function($scope, $http) {
        $scope.$watch('search', function() {
            fetch(); //watches the search input 
        });

        //function called every 800ms to perform AJAX call
        function fetch() {

            //the results only return a partial img path so this is added to provide the full url to display the poster... those tricksters!


            //defining the search value from the input
            search = $("#search").val();

            //this query allows users to search by title 
            $http.get('https://api.themoviedb.org/3/search/movie?api_key=aa8b43b8cbce9d1689bef3d0c3087e4d&query=' + search)
                .then(function(response) {
                    //console.log(response.data.results)

                    //remove movies from json which doesnot have poster
                    
                var movieswithposter = removeMoviewithOutposter(response.data.results);
                
                //add path to images as tmdb doesn't provide the full path to poster
                
                    var movies = grabImage(movieswithposter);
                    $scope.allresults = movies;

                });
        }
    
        //rearrange the index of array because while deleting object the index of objects was not arranged properly for the view of ng-app
        Array.prototype.clean = function(deleteValue) {
            for (var i = 0; i < this.length; i++) {
                if (this[i] == deleteValue) {
                    this.splice(i, 1);
                    i--;
                }
            }
            return this;
        };
        
         //setting the image path/url
    
        function grabImage(json) {
            var imgPath = "https://image.tmdb.org/t/p/w185/";
            for (var i = 0; i < json.length; i++) {
                json[i].poster_path = imgPath + json[i].poster_path;
            }
            //console.log(json);
            return json;
        };
        //remove movies which doesn't have any poster
        function removeMoviewithOutposter(json) {
            for (var i = 0; i < json.length; i++) {
                if (json[i].poster_path === null) {
                    //delete the object which poster_path is null
                    delete json[i];

                }
            }
            //turn the object into array
            var array = $.map(json, function(value, index) {
                return [value];
            });
            array.clean(undefined);
            return array;
        };
        //call the modal with populated form of tmdb data when user select a movie to add in database
        $scope.sakib = function($index) {
            //call modal    
            rakib();
            //change input value and disable them
            document.getElementById('original_title').value = $index.original_title;
            document.getElementById('overview').value = $index.overview;
            document.getElementById('poster_path').value = $index.poster_path;

                                        };

                                         })