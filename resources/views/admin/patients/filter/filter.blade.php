<div class="search-container">
    <form action="{{route('patients.index')}}" method="GET">
        <input type="text" name="keyword" value="{{ old('keyword', request()->input('keyword')) }}" placeholder="Search here">
        <label class="bold" for="state">State:</label>
        <select name="status">
            <option value="">---</option>
            <option value="1" {{ old('status', request()->input('status')) == '1' ? 'selected' : '' }}>Comlete</option>
            <option value="0" {{ old('status', request()->input('status')) == '0' ? 'selected' : '' }}>Not complete</option>
        </select>
        <label class="bold" for="sort">Sort By:</label>
        <select name="sort_by">
            <option value="">---</option>
            <option value="name" {{ old('sort_by', request()->input('sort_by')) == 'name' ? 'selected' : '' }}>Name</option>
            <option value="phone" {{ old('sort_by', request()->input('sort_by')) == 'phone' ? 'selected' : '' }}>Phone</option>
        </select>
        <Label class="bold" for="order_by">Order by</Label>
        <select name="order_by">
            <option value="">---</option>
            <option value="asc" {{ old('order_by', request()->input('order_by')) == 'asc' ? 'selected' : '' }}>Ascending</option>
            <option value="desc" {{ old('order_by', request()->input('order_by')) == 'desc' ? 'selected' : '' }}>Descending</option>
        </select>
        <button type="submit" name="submit" class="btn btn-link">Search</button>
    </form>
</div>
