Schema::create('recycling', function (Blueprint $table) {
    $table->id();
    $table->text('instructions');
    $table->foreignId('user_id')->constrained();
    $table->timestamps();
});