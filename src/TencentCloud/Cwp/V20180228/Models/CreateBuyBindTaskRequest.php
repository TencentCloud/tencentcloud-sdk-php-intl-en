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
 * CreateBuyBindTask request structure.
 *
 * @method string getDealName() Obtain Order Number
 * @method void setDealName(string $DealName) Set Order Number
 * @method integer getLicenseType() Obtain Optional parameters. 1: Pro Edition-monthly subscription; 2: Ultimate Edition-monthly subscription
 * @method void setLicenseType(integer $LicenseType) Set Optional parameters. 1: Pro Edition-monthly subscription; 2: Ultimate Edition-monthly subscription
 * @method array getQuuidList() Obtain Machine list
 * @method void setQuuidList(array $QuuidList) Set Machine list
 * @method boolean getIsAll() Obtain Whether to select all machines
 * @method void setIsAll(boolean $IsAll) Set Whether to select all machines
 */
class CreateBuyBindTaskRequest extends AbstractModel
{
    /**
     * @var string Order Number
     */
    public $DealName;

    /**
     * @var integer Optional parameters. 1: Pro Edition-monthly subscription; 2: Ultimate Edition-monthly subscription
     */
    public $LicenseType;

    /**
     * @var array Machine list
     */
    public $QuuidList;

    /**
     * @var boolean Whether to select all machines
     */
    public $IsAll;

    /**
     * @param string $DealName Order Number
     * @param integer $LicenseType Optional parameters. 1: Pro Edition-monthly subscription; 2: Ultimate Edition-monthly subscription
     * @param array $QuuidList Machine list
     * @param boolean $IsAll Whether to select all machines
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
        if (array_key_exists("DealName",$param) and $param["DealName"] !== null) {
            $this->DealName = $param["DealName"];
        }

        if (array_key_exists("LicenseType",$param) and $param["LicenseType"] !== null) {
            $this->LicenseType = $param["LicenseType"];
        }

        if (array_key_exists("QuuidList",$param) and $param["QuuidList"] !== null) {
            $this->QuuidList = $param["QuuidList"];
        }

        if (array_key_exists("IsAll",$param) and $param["IsAll"] !== null) {
            $this->IsAll = $param["IsAll"];
        }
    }
}
