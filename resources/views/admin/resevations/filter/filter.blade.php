<div class="search-container">
    <form action="{{route('reservations.index')}}" method="GET">
        <input type="text" name="keyword" value="{{ old('keyword', request()->input('keyword')) }}" placeholder="Search here">
        <label class="bold" for="sort">Sort By:</label>
        <select name="sort_by">
            <option value="">---</option>
            <option value="date" {{ old('sort_by', request()->input('sort_by')) == 'date' ? 'selected' : '' }}>Date</option>
        </select>
        <Label class="bold" for="order_by">Order by</Label>
        <select name="order_by">
            <option value="">---</option>
            <option value="asc" {{ old('order_by', request()->input('order_by')) == 'asc' ? 'selected' : '' }}>Ascending</option>
            <option value="desc" {{ old('order_by', request()->input('order_by')) == 'desc' ? 'selected' : '' }}>Descending</option>
        </select>
        <button type="submit" name="submit" class="btn btn-link"><i class="fa fa-search"></i></button>
    </form>
</div>
