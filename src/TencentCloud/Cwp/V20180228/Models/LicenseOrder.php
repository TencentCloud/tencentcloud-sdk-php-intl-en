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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Authorization Order Object Content
 *
 * @method integer getLicenseId() Obtain Authorization ID
 * @method void setLicenseId(integer $LicenseId) Set Authorization ID
 * @method integer getLicenseType() Obtain Authorization type
 * @method void setLicenseType(integer $LicenseType) Set Authorization type
 * @method integer getStatus() Obtain Authorization Order Resource Status
 * @method void setStatus(integer $Status) Set Authorization Order Resource Status
 * @method integer getSourceType() Obtain Order type
 * @method void setSourceType(integer $SourceType) Set Order type
 * @method string getResourceId() Obtain Resource ID
 * @method void setResourceId(string $ResourceId) Set Resource ID
 */
class LicenseOrder extends AbstractModel
{
    /**
     * @var integer Authorization ID
     */
    public $LicenseId;

    /**
     * @var integer Authorization type
     */
    public $LicenseType;

    /**
     * @var integer Authorization Order Resource Status
     */
    public $Status;

    /**
     * @var integer Order type
     */
    public $SourceType;

    /**
     * @var string Resource ID
     */
    public $ResourceId;

    /**
     * @param integer $LicenseId Authorization ID
     * @param integer $LicenseType Authorization type
     * @param integer $Status Authorization Order Resource Status
     * @param integer $SourceType Order type
     * @param string $ResourceId Resource ID
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
        if (array_key_exists("LicenseId",$param) and $param["LicenseId"] !== null) {
            $this->LicenseId = $param["LicenseId"];
        }

        if (array_key_exists("LicenseType",$param) and $param["LicenseType"] !== null) {
            $this->LicenseType = $param["LicenseType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }
    }
}
