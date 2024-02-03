<script type="module">
    $(document).ready(function(){
        $.ajax({
            url: "{{ route('unit-activity.data') }}",
            type: 'GET',
            dataType: 'json',
            success: function(response) {

                var data = '';
                for (var key in response.data.articles) {
                var article = response.data.articles[key]; // Get the current article

                var categoryName = "";
                for (var categoryKey in response.data.categories) {
                    var category = response.data.categories[categoryKey]; // Get the current category

                    if (article.category_id === category.id) {
                        var htmlLang = document.documentElement.lang;
                        categoryName = category.name[htmlLang];
                        break;
                    }
                }

                function Date(date) {
                    var locale = navigator.language;
                    var formattedDate = new Date(date).toLocaleDateString(locale);

                    return formattedDate;
                }


                data += `
                <div class="item">
                    <div class="thumbnail">
                        <img src="{{ asset('${article.thumbnail}') }}" alt="">
                        <span>${categoryName}</span>
                    </div>
                    <div class="title">
                        <h3>${article.title[htmlLang]}</h3>
                        <div class="date">
                            <i class="fa-regular fa-calendar"></i>
                            <span></span>
                        </div>
                    </div>
                </div>
                `;
            }
                document.getElementById("includeData").innerHTML = data;
            },
            error: function(xhr, status, error) {
                // Handle the error here
                console.log(error);
            }
            });
    })
</script>
