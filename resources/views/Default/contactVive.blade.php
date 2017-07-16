<div class="col-md-9" style="width: 900px;">
    <pre>
    {{ print_r(Session::all()) }}
    </pre>
    <div class="">
        <h2>Contact us</h2>
    </div>

    <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin elementum porttitor congue. Integer porttitor enim vel metus gravida, sit amet mattis nisl vulputate. Maecenas lacinia erat enim, a sollicitudin dolor tempor ac. Praesent nunc sem, congue at ex id, iaculis pulvinar justo. In fringilla sit amet ligula scelerisque fringilla. Aliquam erat volutpat. Aliquam cursus neque non lacinia aliquet. Sed ut hendrerit odio. Pellentesque id velit magna. Integer placerat suscipit tincidunt. Curabitur in quam at risus scelerisque vehicula. Duis venenatis egestas faucibus. Mauris quis sollicitudin dolor. Sed et leo urna. Quisque ipsum lectus, scelerisque at odio porta, vulputate interdum nunc.
    </p>
    <form action="{{route('contact')}}" method="post">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Jane Doe" value="{{old('name')}}">
        </div>
        <div class="form-group">
            <label for="email">Email adres</label>
            <input type="text" class="form-control" name="email" id="stile" placeholder="Email" value="{{old('email')}}">
        </div>
        <div class="form-group">
            <label for="text">Text</label>
            <textarea class="form-control" name="text" id="text" rows="3" placeholder="Site">{{old('text')}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>