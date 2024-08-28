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
 * DeleteLicenseRecord request structure.
 *
 * @method integer getLicenseId() Obtain Authorization ID, which can be obtained from the authorization order list
 * @method void setLicenseId(integer $LicenseId) Set Authorization ID, which can be obtained from the authorization order list
 * @method integer getLicenseType() Obtain Authorization type
 * @method void setLicenseType(integer $LicenseType) Set Authorization type
 * @method string getResourceId() Obtain Resource ID
 * @method void setResourceId(string $ResourceId) Set Resource ID
 */
class DeleteLicenseRecordRequest extends AbstractModel
{
    /**
     * @var integer Authorization ID, which can be obtained from the authorization order list
     */
    public $LicenseId;

    /**
     * @var integer Authorization type
     */
    public $LicenseType;

    /**
     * @var string Resource ID
     */
    public $ResourceId;

    /**
     * @param integer $LicenseId Authorization ID, which can be obtained from the authorization order list
     * @param integer $LicenseType Authorization type
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

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }
    }
}
