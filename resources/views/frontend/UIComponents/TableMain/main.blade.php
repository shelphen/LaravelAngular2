<input *ngIf="config.filtering" placeholder="Filter"
       [ngTableFiltering]="config.filtering"
       (tableChanged)="onChangeTable(config)"/>

<ng-table [config]="config.sorting"
          (tableChanged)="onChangeTable(config)"
          [rows]="rows" [columns]="columns">
</ng-table>
<pagination-demo>
</pagination-demo>

<pre *ngIf="config.paging" class="card card-block card-header">Page: @{{page}} / @{{numPages}}</pre>