<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Certificate list of the kong instance
 *
 * @method integer getTotal() Obtain Total Quantity of Certificate Lists
 * @method void setTotal(integer $Total) Set Total Quantity of Certificate Lists
 * @method array getCertificatesList() Obtain None.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCertificatesList(array $CertificatesList) Set None.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getPages() Obtain Total number of pages in the certificate list
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPages(integer $Pages) Set Total number of pages in the certificate list
Note: This field may return null, indicating that no valid values can be obtained.
 */
class KongCertificatesList extends AbstractModel
{
    /**
     * @var integer Total Quantity of Certificate Lists
     */
    public $Total;

    /**
     * @var array None.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CertificatesList;

    /**
     * @var integer Total number of pages in the certificate list
Note: This field may return null, indicating that no valid values can be obtained.
     * @deprecated
     */
    public $Pages;

    /**
     * @param integer $Total Total Quantity of Certificate Lists
     * @param array $CertificatesList None.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Pages Total number of pages in the certificate list
Note: This field may return null, indicating that no valid values can be obtained.
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("CertificatesList",$param) and $param["CertificatesList"] !== null) {
            $this->CertificatesList = [];
            foreach ($param["CertificatesList"] as $key => $value){
                $obj = new KongCertificatesPreview();
                $obj->deserialize($value);
                array_push($this->CertificatesList, $obj);
            }
        }

        if (array_key_exists("Pages",$param) and $param["Pages"] !== null) {
            $this->Pages = $param["Pages"];
        }
    }
}
