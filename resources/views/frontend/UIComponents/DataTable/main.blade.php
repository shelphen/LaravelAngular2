<div class="container">
    <div class="col-xs-12">

        <div class="panel panel-default">
            <div class="panel-heading">User information</div>

            <table class="table table-striped" [mfData]="data" #mf="mfDataTable" [mfRowsOnPage]="10">
                <thead>
                <tr>
                    <th style="width: 10%"></th>
                    <th style="width: 20%">
                        <mfDefaultSorter by="name">Name</mfDefaultSorter>
                    </th>
                    <th style="width: 40%">
                        <mfDefaultSorter by="email">Email</mfDefaultSorter>
                    </th>
                    <th style="width: 10%">
                        <mfDefaultSorter by="age">Age</mfDefaultSorter>
                    </th>
                    <th style="width: 20%">
                        <mfDefaultSorter by="city">City</mfDefaultSorter>
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr *ngFor="let item of mf.data">
                    <td>
                        <button class="btn btn-danger" title="remove" (click)="removeItem(item)">
                            <span class="glyphicon glyphicon-remove"></span>
                        </button>
                    </td>
                    <td>@{{item.name}}</td>
                    <td>@{{item.email}}</td>
                    <td{{-- class="text-right"--}}>@{{item.age}}</td>
                    <td>@{{item.city | uppercase}}</td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                    <td colspan="5">
                        <mfBootstrapPaginator [rowsOnPageSet]="[5,10,15]"></mfBootstrapPaginator>
                    </td>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>