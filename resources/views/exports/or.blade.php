<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <table>
        <tbody>
            <tr><td colspan="4"></td></tr>
            <tr><td colspan="4"></td></tr>
            <tr>
                <td colspan="2" style="width: 65px;"></td>
                <td colspan="2" style="text-align: center; width: 129px;">{{$receipt->created_at}}</td>
            </tr>
            <tr><td colspan="4"></td></tr>
            <tr>
                <td></td>
                <td colspan="3">{{$receipt->laboratory->name}}</td>
            </tr>
            <tr>
                <td></td>
                <td colspan="3" style="height: 30px;">{{$receipt->payor->customer_name->name}}</td>
            </tr>
            <tr><td colspan="4" style="height: 50px;"></td></tr>
            <tr><td colspan="4">{{$receipt->op->collection->name}}</td></tr>
            @php 
            $count = count($receipt->op->items);
            $total = 7 - $count;
            @endphp
            @foreach($receipt->op->items as $item)
            <tr>
                <td colspan="2" style="height: 22px;">{{$item->tsr->code}}</td>
                <td colspan="2" style="text-align: right;">{{$item->tsr->payment->total}}</td>
            </tr>
            @endforeach
            @for ($i = 0; $i < $total; $i++)
            <tr>
                <td colspan="4" style="height: 22px;"></td>
            </tr>
            @endfor
            <tr><td colspan="4" style="text-align: right;">{{$receipt->op->total}}</td></tr>
            @php
                $tot = trim(str_replace(',','',$receipt->op->total),'₱');
                $digit = new NumberFormatter("en", NumberFormatter::SPELLOUT);
                $number = $digit->format($tot);
            @endphp
            <tr>
                <td colspan="4" rowspan="2" style="word-wrap: break-word; vertical-align: middle;">
                <pre>{!! str_repeat('&nbsp;', 10) !!}</pre> {{ucwords($number)}} Pesos
                </td>
            </tr>
        </tbody>
    </table>
</html>
