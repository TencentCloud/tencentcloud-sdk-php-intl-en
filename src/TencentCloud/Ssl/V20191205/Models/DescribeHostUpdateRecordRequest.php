<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeHostUpdateRecord request structure.
 *
 * @method integer getOffset() Obtain Paging offset, starting from 0
 * @method void setOffset(integer $Offset) Set Paging offset, starting from 0
 * @method integer getLimit() Obtain Number per page, 10 by default.
 * @method void setLimit(integer $Limit) Set Number per page, 10 by default.
 * @method string getCertificateId() Obtain New certificate ID
 * @method void setCertificateId(string $CertificateId) Set New certificate ID
 * @method string getOldCertificateId() Obtain Old certificate ID
 * @method void setOldCertificateId(string $OldCertificateId) Set Old certificate ID
 */
class DescribeHostUpdateRecordRequest extends AbstractModel
{
    /**
     * @var integer Paging offset, starting from 0
     */
    public $Offset;

    /**
     * @var integer Number per page, 10 by default.
     */
    public $Limit;

    /**
     * @var string New certificate ID
     */
    public $CertificateId;

    /**
     * @var string Old certificate ID
     */
    public $OldCertificateId;

    /**
     * @param integer $Offset Paging offset, starting from 0
     * @param integer $Limit Number per page, 10 by default.
     * @param string $CertificateId New certificate ID
     * @param string $OldCertificateId Old certificate ID
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("CertificateId",$param) and $param["CertificateId"] !== null) {
            $this->CertificateId = $param["CertificateId"];
        }

        if (array_key_exists("OldCertificateId",$param) and $param["OldCertificateId"] !== null) {
            $this->OldCertificateId = $param["OldCertificateId"];
        }
    }
}
