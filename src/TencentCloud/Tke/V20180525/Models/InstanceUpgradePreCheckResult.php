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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Pre-upgrade check result of a node
 *
 * @method boolean getCheckPass() Obtain Whether the check is passed
 * @method void setCheckPass(boolean $CheckPass) Set Whether the check is passed
 * @method array getItems() Obtain Array of check items
 * @method void setItems(array $Items) Set Array of check items
 * @method array getSinglePods() Obtain List of independent pods on this node
 * @method void setSinglePods(array $SinglePods) Set List of independent pods on this node
 */
class InstanceUpgradePreCheckResult extends AbstractModel
{
    /**
     * @var boolean Whether the check is passed
     */
    public $CheckPass;

    /**
     * @var array Array of check items
     */
    public $Items;

    /**
     * @var array List of independent pods on this node
     */
    public $SinglePods;

    /**
     * @param boolean $CheckPass Whether the check is passed
     * @param array $Items Array of check items
     * @param array $SinglePods List of independent pods on this node
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
        if (array_key_exists("CheckPass",$param) and $param["CheckPass"] !== null) {
            $this->CheckPass = $param["CheckPass"];
        }

        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new InstanceUpgradePreCheckResultItem();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }

        if (array_key_exists("SinglePods",$param) and $param["SinglePods"] !== null) {
            $this->SinglePods = $param["SinglePods"];
        }
    }
}
