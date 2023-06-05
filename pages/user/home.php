<?php require 'header.php';?>

<style>
td,
th {
    font-size: 12px;
}
</style>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">

                <h5 class="card-title">Таны санхүүгийн гүйлгээ</h5>
                <p class="card-title-desc">
                    Мөнгөн дүнг бүхэл тоогоор оруулна. Сар бүр давтагддаг зардлыг СБ хэсэгт тэмдэглэж ялгана.
                </p>
                <div class="table-responsive">
                    <table class="table table-striped mb-0">
                        <thead>
                            <tr>
                                <th class="px-0 pr-1"></th>
                                <th class="px-0 pr-1">Огноо</th>
                                <th class="px-0 pr-1">Гүйлгээний утга</th>
                                <th class="px-0 pr-1">СБ</th>
                                <th class="px-0 pr-1">Төрөл</th>
                                <th class="px-0 pr-1">Харилцагч</th>
                                <th class="px-0 pr-1">Мөнгө <i class="fa fa-arrow-up text-success mr-1 font-10"></i>
                                </th>
                                <th class="px-0 pr-1">Мөнгө <i class="fa fa-arrow-down text-danger mr-1 font-10"></i>
                                </th>
                                <th class="px-0 pr-1">Хөрөнгө <i class="fa fa-arrow-up text-success mr-1 font-10"></i>
                                </th>
                                <th class="px-0 pr-1">Хөрөнгө <i class="fa fa-arrow-down text-danger mr-1 font-10"></i>
                                </th>
                                <th class="px-0 pr-1">Бараа <i class="fa fa-arrow-up text-success mr-1 font-10"></i>
                                </th>
                                <th class="px-0 pr-1">Бараа <i class="fa fa-arrow-down text-danger mr-1 font-10"></i>
                                </th>
                                <th class="px-0 pr-1">Авлага <i class="fa fa-arrow-up text-success mr-1 font-10"></i>
                                </th>
                                <th class="px-0 pr-1">Авлага <i class="fa fa-arrow-down text-danger mr-1 font-10"></i>
                                </th>
                                <th class="px-0 pr-1">Өр <i class="fa fa-arrow-up text-success mr-1 font-10"></i></th>
                                <th class="px-0 pr-1">Өр <i class="fa fa-arrow-down text-danger mr-1 font-10"></i></th>
                                <th class="px-0 pr-1">Орлого</th>
                                <th class="px-0 pr-1">Зардал</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <form action="/user/record/new" method="post">
                                <tr>
                                    <th scope="row" class="px-0 pl-1"></th>
                                    <td class="px-0 pr-1"><input name="ognoo" value="2023-06-03" type="text"
                                            class="form-control form-control-sm" style="width:100px" id="datepicker">
                                    </td>
                                    <td class="px-0 pr-1"><input name="utga" value="zaragaas huwtsas awsan"
                                            class="form-control form-control-sm" style="width: 250px;" type="text"
                                            placeholder=""></td>
                                    <td class="px-0 pr-1">
                                        <div class="custom-control custom-checkbox">
                                            <input name="togtmol" type="checkbox" class="custom-control-input"
                                                id="customCheck02" data-parsley-multiple="groups"
                                                data-parsley-mincheck="2">
                                            <label class="custom-control-label" for="customCheck02"></label>
                                        </div>
                                    </td>
                                    <td class="px-0 pr-1"><input name="turul" value="huwtsas"
                                            class="form-control form-control-sm" type="text" placeholder=""></td>
                                    <td class="px-0 pr-1"><input name="hariltsagch" class="form-control form-control-sm"
                                            type="text" placeholder=""></td>
                                    <td class="px-0 pr-1"><input name="mungu_usuh" class="form-control form-control-sm"
                                            type="text" placeholder=""></td>
                                    <td class="px-0 pr-1"><input name="mungu_buurah"
                                            class="form-control form-control-sm" type="text" placeholder=""></td>
                                    <td class="px-0 pr-1"><input name="hurungu_usuh"
                                            class="form-control form-control-sm" type="text" placeholder=""></td>
                                    <td class="px-0 pr-1"><input name="hurungu_buurah"
                                            class="form-control form-control-sm" type="text" placeholder=""></td>
                                    <td class="px-0 pr-1"><input name="baraa_usuh" class="form-control form-control-sm"
                                            type="text" placeholder=""></td>
                                    <td class="px-0 pr-1"><input name="baraa_buurah"
                                            class="form-control form-control-sm" type="text" placeholder=""></td>
                                    <td class="px-0 pr-1"><input name="awlaga_usuh" class="form-control form-control-sm"
                                            type="text" placeholder=""></td>
                                    <td class="px-0 pr-1"><input name="awlaga_buurah"
                                            class="form-control form-control-sm" type="text" placeholder=""></td>
                                    <td class="px-0 pr-1"><input name="ur_usuh" class="form-control form-control-sm"
                                            type="text" placeholder=""></td>
                                    <td class="px-0 pr-1"><input name="ur_buurah" class="form-control form-control-sm"
                                            type="text" placeholder=""></td>
                                    <td class="px-0 pr-1"><input name="orlogo" class="form-control form-control-sm"
                                            type="text" placeholder=""></td>
                                    <td class="px-0 pr-1"><input name="zardal" value="50000"
                                            class="form-control form-control-sm" type="text" placeholder=""></td>
                                    <td>
                                        <button type="submit" class="btn btn-instagram ml-1 btn-sm">
                                            <i class="ti-save mr-1 font-10"></i>
                                        </button>
                                    </td>
                                </tr>
                            </form>
                            <?php
_selectAll($stmt, $count, "select id, ognoo, utga, togtmol, turul, hariltsagch, mungu_usuh, mungu_buurah,
                            hurungu_usuh, hurungu_buurah, baraa_usuh, baraa_buurah, awlaga_usuh, awlaga_buurah, ur_usuh, ur_buurah,
                            orlogo, zardal from transaction", $id, $ognoo, $utga, $togtmol, $turul, $hariltsagch, $mungu_usuh, $mungu_buurah,
    $hurungu_usuh, $hurungu_buurah, $baraa_usuh, $baraa_buurah, $awlaga_usuh, $awlaga_buurah, $ur_usuh, $ur_buurah,
    $orlogo, $zardal);

                            while(_fetch($stmt)):
                            ?>

                            <tr>
                                <th scope="row" class="px-0 pl-1">1</th>
                                <td class="px-0 pr-1"><?=$ognoo?></td>
                                <td class="px-0 pr-1"><?=$utga?></td>
                                <td class="px-0 pr-1">
                                    <?php if(!empty($togtmol)): ?>
                                    <div class="custom-control custom-checkbox ">
                                        <input name="togtmol" type="checkbox" checked class="custom-control-input"
                                            id="customCheck02" data-parsley-multiple="groups" data-parsley-mincheck="2">
                                        <label class="custom-control-label" for="customCheck02"></label>
                                    </div>
                                    <?php endif?>
                                </td>
                                <td><?=$turul?></td>
                                <td><?=$hariltsagch?></td>
                                <td><?=$mungu_usuh?></td>
                                <td class="table-danger"><?=$mungu_buurah?></td>
                                <td><?=$hurungu_usuh?></td>
                                <td><?=$hurungu_buurah?></td>
                                <td><?=$baraa_usuh?></td>
                                <td><?=$baraa_buurah?></td>
                                <td><?=$awlaga_usuh?></td>
                                <td><?=$awlaga_buurah?></td>
                                <td><?=$ur_usuh?></td>
                                <td><?=$ur_buurah?></td>
                                <td><?=$orlogo?></td>
                                <td class="table-danger"><?=$zardal?></td>
                                <td class="pt-3"><i class=" dripicons-document-edit mr-1"></i><i
                                        class="ti-trash mr-1"></i></td>
                            </tr>
                            <?php endwhile;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require 'footer.php';?>