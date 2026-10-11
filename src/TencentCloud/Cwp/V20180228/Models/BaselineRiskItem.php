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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * top 5 baseline detection items
 *
 * @method integer getItemId() Obtain Detection item Id
 * @method void setItemId(integer $ItemId) Set Detection item Id
 * @method string getItemName() Obtain Detection Item Name
 * @method void setItemName(string $ItemName) Set Detection Item Name
 * @method integer getLevel() Obtain Risk level
 * @method void setLevel(integer $Level) Set Risk level
 * @method integer getHostCount() Obtain Number of affected servers
 * @method void setHostCount(integer $HostCount) Set Number of affected servers
 */
class BaselineRiskItem extends AbstractModel
{
    /**
     * @var integer Detection item Id
     */
    public $ItemId;

    /**
     * @var string Detection Item Name
     */
    public $ItemName;

    /**
     * @var integer Risk level
     */
    public $Level;

    /**
     * @var integer Number of affected servers
     */
    public $HostCount;

    /**
     * @param integer $ItemId Detection item Id
     * @param string $ItemName Detection Item Name
     * @param integer $Level Risk level
     * @param integer $HostCount Number of affected servers
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
        if (array_key_exists("ItemId",$param) and $param["ItemId"] !== null) {
            $this->ItemId = $param["ItemId"];
        }

        if (array_key_exists("ItemName",$param) and $param["ItemName"] !== null) {
            $this->ItemName = $param["ItemName"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("HostCount",$param) and $param["HostCount"] !== null) {
            $this->HostCount = $param["HostCount"];
        }
    }
}
