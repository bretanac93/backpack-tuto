{{-- relationships with pivot table (n-n) --}}
<td>
    <?php
        $results = $entry->{$column['entity']};

        if ($results && $results->count()) {
            $results_array = $results->pluck($column['attribute']);
            foreach ($results_array->toArray() as $key => $value) {
            	echo "<span class='badge'>$value</span> ";
            }

        } else {
            echo '-';
        }
    ?>
</td>
