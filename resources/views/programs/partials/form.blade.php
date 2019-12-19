<!-- 제목 -->
<div class="form-group">
    <label for="title">제목</label>
    <input type="text" name="title" id="title" value="" class="form-control" />
</div>

<!-- 내용 -->
<div class="form-group">
    <label for="content">내용</label>
    <textarea name="content" id="content" rows="10"
        class="form-control"></textarea>
</div>

<!-- 첨부파일 -->
<div class="form-group">
    <label for="files">파일</label>
    <input type="file" name="files[]" id="program_file" class="form-control" multiple="multiple" enctype="multipart/form-data"/>
</div>