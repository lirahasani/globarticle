<div>
    <div class="w-full h-screen relative">
        <div class="absolute w-full h-full z-10">
            <div class="px-16  h-full flex items-center justify-start">
                <div class="hidden lg:flex flex-col w-2/5">
                    <h3 class="text-4xl font-semibold text-white hover:text-blue-400 uppercase">Glob<span class="text-blue-400 hover:text-white uppercase">article</span></h3>
                    <div id="sentence" class="text-white uppercase tracking-widest text-sm">Welcome to Global Articles</div>
                </div>
            </div>
        </div>
        <video class="w-full h-64 lg:h-screen object-cover -mt-1 bg-cover bg-center" autoplay muted loop>
            <source class="h-screen object-contain" src="https://file-examples-com.github.io/uploads/2017/04/file_example_MP4_1280_10MG.mp4" type="video/mp4">
        </video>
    </div>
</div>

<script>
$(function () {
  count = 0;
  wordsArray = ["Join our community","Write your first article", "Connect to people", "Search for articles", "Welcome to Global Articles"];
  setInterval(function () {
    count++;
    $("#sentence").fadeOut(400, function () {
      $(this).text(wordsArray[count % wordsArray.length]).fadeIn(400);
    });
  }, 2000);
});
</script>