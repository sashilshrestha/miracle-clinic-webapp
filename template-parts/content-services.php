<div class="p-4 md:w-1/3">
  <div class="flex rounded-lg h-full p-8 flex-col  hover:shadow-lg transition-all duration-300 bg-gray-50 cursor-pointer border border-gray-200">
    <div class="flex items-center mb-2">
      <h2 class="text-gray-900 text-2xl title-font font-bold "><?php the_title(); ?></h2>
    </div>
    <div class="flex-grow">
      <p class="leading-relaxed text-base leading-5"> <?php echo strip_tags(get_the_content()); ?></p>
    </div>
  </div>
</div>