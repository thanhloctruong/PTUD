<div class="KBYT">
    <div block-bind="content" id="content">
        <div class="container px-1">
            <div class="card px-1 py-2 p-sm-2 mt-2">
                <div class="row ">
                <div class="col-12 text-center text-uppercase mt-1">
                    <span class="text-title">
                        <span class="text_donvi_ten">Thông tin khai báo y tế</span>
                    </span>
                </div>
                    <div class="col-12 d-flex flex-wrap ">
                        <div class="custom-control custom-radio mt-2 mr-2">
                            <input type="radio" id="cuatoi" value="2" name="loai_khaibao" class="custom-control-input" checked="">
                            <label class="custom-control-label" for="cuatoi" >Bệnh nhân/Người nhà</label>
                        </div>

                        <div class="custom-control custom-radio mt-2 mr-2 ">
                            <input type="radio" id="theodoi_suckhoe_tainha" value="7" name="loai_khaibao" class="custom-control-input">
                            <label class="custom-control-label " for="theodoi_suckhoe_tainha" >Theo dõi sức khỏe tại nhà</label>
                        </div>
                        <div class="custom-control custom-radio mt-1" style="flex: 1;text-align: right;padding-right: 10px;padding-left: 0;">
                            <button type="reset" class="btn btn-sm btn-outline-primary clear-data px-1">Nhập lại</button>
                        </div>
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="col-12 donvi_khaibao">
                        <div class="form-group">
                            <span class="text_donvi">Nơi khai báo</span><span class="text-danger">(*)</span>:
                            <input type="text" class="form-control"  placeholder="Nhập và chọn nơi khai báo" >
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <span class="text_phone" >Số điện thoại</span><span class="text-danger"> (*)</span>:
                            <input type="number" class="form-control"  placeholder="Nhập số điện thoại" >
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <span class="text_fullname">Họ và tên</span> <span class="text-danger">(*)</span>:
                            <input type="text" class="form-control text-uppercase" placeholder="Họ và tên" >
                        </div>
                    </div>
                    <div class="col-12 wrap_trieuchung">
                        <div class="form-group">
                            <span class="text_note_1 text-primary font-weight-bold" >Trong 14 ngày qua, Ông/bà có những triệu chứng nào</span><span class="text-danger"> (*)</span>:
                            <div class="table-responsive mt-1">
                                <table class="table table-bordered mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text_symptoms" >Dấu hiệu</th>
                                            <th width="15%" class="text-center text_yes" >Có</th>
                                            <th width="15%" class="text-center text_no" >Không</th>
                                        </tr>
                                    </thead>
                                                
                                <tr>
                                    <td>Sốt <span class="text-danger">(*)</span></td>
                                    <td class="text-center td-center">
                                <input type="radio" id="sot" name="trieuchung_sot" class="radio-trieuchung" value="1">
                                    </td>
                                    <td class="text-center td-center">
                                <input type="radio" id="sot" name="trieuchung_sot" class="radio-trieuchung" value="0" checked="">
                                    </td>
                                </tr>              
                                <tr>
                                    <td>Ho <span class="text-danger">(*)</span></td>
                                    <td class="text-center td-center">
                                <input type="radio" id="ho" name="trieuchung_ho" class="radio-trieuchung" value="1">
                                    </td>
                                    <td class="text-center td-center">
                                <input type="radio" id="ho" name="trieuchung_ho" class="radio-trieuchung" value="0" checked="">
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td>Đau họng <span class="text-danger">(*)</span></td>
                                    <td class="text-center td-center">
                                <input type="radio" id="dauhong" name="trieuchung_dauhong" class="radio-trieuchung" value="1">
                                    </td>
                                    <td class="text-center td-center">
                                <input type="radio" id="dauhong" name="trieuchung_dauhong" class="radio-trieuchung" value="0" checked="">
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td>Mất vị/Mất mùi <span class="text-danger">(*)</span></td>
                                    <td class="text-center td-center">
                                <input type="radio" id="matViGiac" name="trieuchung_matViGiac" class="radio-trieuchung" value="1">
                                    </td>
                                    <td class="text-center td-center">
                                <input type="radio" id="matViGiac" name="trieuchung_matViGiac" class="radio-trieuchung" value="0" checked="">
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td>Cảm giác mệt <span class="text-danger">(*)</span></td>
                                    <td class="text-center td-center">
                                <input type="radio" id="met" name="trieuchung_met" class="radio-trieuchung" value="1">
                                    </td>
                                    <td class="text-center td-center">
                                <input type="radio" id="met" name="trieuchung_met" class="radio-trieuchung" value="0" checked="">
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td>Khó thở <span class="text-danger">(*)</span></td>
                                    <td class="text-center td-center">
                                <input type="radio" id="khotho" name="trieuchung_khotho" class="radio-trieuchung" value="1">
                                    </td>
                                    <td class="text-center td-center">
                                <input type="radio" id="khotho" name="trieuchung_khotho" class="radio-trieuchung" value="0" checked="">
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td>Triệu chứng/dấu hiệu khác <span class="text-danger">(*)</span></td>
                                    <td class="text-center td-center">
                                <input type="radio" id="khac" name="trieuchung_khac" class="radio-trieuchung" value="1">
                                    </td>
                                    <td class="text-center td-center">
                                <input type="radio" id="khac" name="trieuchung_khac" class="radio-trieuchung" value="0" checked="">
                                    </td>
                                </tr>
                                </table>
                            </div>   
                        </div>

                    <div class="form-group xacnhan_dichte">
                        <span class="text_note_2 text-primary font-weight-bold" >Trong vòng 14 ngày qua vừa qua, bạn có từng: </span><span class="text-danger">
                            (*)</span>:
                        <div class="table-responsive mt-1">
                            <table class="table table-bordered mb-0">
                                <thead>
                                    <tr>
                                        <th><span class="text_epidemiological_factors">Yếu tố dịch tễ</span> <span class="text-danger">(*)</span></th>
                                        <th width="15%" class="text-center text_yes" >Có</th>
                                        <th width="15%" class="text-center text_no">Không</th>
                                    </tr>
                                </thead>
                                <tbody id="list-dichte">
                                    <tr>
                                        <td>1. Bạn có đang mắc COVID-19 không? <span class="text-danger">(*)</span></td>
                                        <td class="text-center td-center">
                                            <input type="radio" id="coMacCoVid" name="dichte_coMacCoVid" class="radio-dichte" >
                                        </td>
                                        <td class="text-center td-center">
                                            <input type="radio" id="coMacCoVid" name="dichte_coMacCoVid" class="radio-dichte"  checked="">
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>2. Tiếp xúc gần ca nhiễm, ca nghi nhiễm COVID-19 trong vòng 14 ngày qua <span class="text-danger">(*)</span></td>
                                        <td class="text-center td-center">
                                            <input type="radio" id="tiepXucGan" name="dichte_tiepXucGan" class="radio-dichte" >
                                        </td>
                                        <td class="text-center td-center">
                                            <input type="radio" id="tiepXucGan" name="dichte_tiepXucGan" class="radio-dichte"  checked=""></label>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>3. Đi từ quốc gia hoặc vùng lãnh thổ khác trong vòng 14 ngày qua <span class="text-danger">(*)</span></td>
                                        <td class="text-center td-center">
                                            <input type="radio" id="diNoiKhac" name="dichte_diNoiKhac" class="radio-dichte" >
                                        </td>
                                        <td class="text-center td-center">
                                            <input type="radio" id="diNoiKhac" name="dichte_diNoiKhac" class="radio-dichte"  checked="">
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>4. Bạn có kết thúc cách ly tập trung trong vòng 14 ngày qua không? <span class="text-danger">(*)</span></td>
                                        <td class="text-center td-center">
                                            <input type="radio" id="cachlyTapTrung" name="dichte_cachlyTapTrung" class="radio-dichte" >
                                        </td>
                                        <td class="text-center td-center">
                                            <input type="radio" id="cachlyTapTrung" name="dichte_cachlyTapTrung" class="radio-dichte"  checked="">
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>5. Trong vòng 14 ngày qua, trong gia đình/cơ quan bạn có ai sốt hay ho không? <span class="text-danger">(*)</span></td>
                                        <td class="text-center td-center">
                                            <input type="radio" id="dauhieu" name="dichte_dauhieu" class="radio-dichte" >
                                        </td>
                                        <td class="text-center td-center">
                                            <input type="radio" id="dauhieu" name="dichte_dauhieu" class="radio-dichte"  checked="">
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>6. Bạn đã xuất viện do điều trị COVID-19 trong vòng 14 ngày qua không? <span class="text-danger">(*)</span></td>
                                        <td class="text-center td-center">
                                            <input type="radio" id="dieuTri" name="dichte_dieuTri" class="radio-dichte" >
                                        </td>
                                        <td class="text-center td-center">
                                            <input type="radio" id="dieuTri" name="dichte_dieuTri" class="radio-dichte"   checked="">
                                        </td>
                                    </tr>
                                    </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="row">
            <div class="col-12 text-center">
                <span class="col-12 text-center">*Mọi dữ liệu cung cấp đều được bảo mật, phục vụ cho việc điều trị và phòng chống dịch.
                     Bấm “Gửi tờ khai” nếu như bạn đã hiểu và đồng ý.</span>

            </div>
        </div>
        <div class="row">
                <div class="col-12 my-3 text-center">
                    <div block-bind="toolbar"><div class="toolbar"><div class="btn-group toolbar-group w-50"><button type="button" btn-name="save" class="btn btn-primary width-sm ml-1">Gửi</button></div></div></div>
                </div>
            </div>
    </div>
        
                                    

</div>
    </div>
</div>