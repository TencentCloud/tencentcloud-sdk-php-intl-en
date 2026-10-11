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
 * Item
 *
 * @method integer getItemId() Obtain Id
 * @method void setItemId(integer $ItemId) Set Id
 * @method string getItemName() Obtain Name
 * @method void setItemName(string $ItemName) Set Name
 * @method array getCustomItemValues() Obtain Custom threshold.
 * @method void setCustomItemValues(array $CustomItemValues) Set Custom threshold.
 * @method integer getCategoryId() Obtain Category of a detection item.
 * @method void setCategoryId(integer $CategoryId) Set Category of a detection item.
 */
class Item extends AbstractModel
{
    /**
     * @var integer Id
     */
    public $ItemId;

    /**
     * @var string Name
     */
    public $ItemName;

    /**
     * @var array Custom threshold.
     */
    public $CustomItemValues;

    /**
     * @var integer Category of a detection item.
     */
    public $CategoryId;

    /**
     * @param integer $ItemId Id
     * @param string $ItemName Name
     * @param array $CustomItemValues Custom threshold.
     * @param integer $CategoryId Category of a detection item.
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

        if (array_key_exists("CustomItemValues",$param) and $param["CustomItemValues"] !== null) {
            $this->CustomItemValues = $param["CustomItemValues"];
        }

        if (array_key_exists("CategoryId",$param) and $param["CategoryId"] !== null) {
            $this->CategoryId = $param["CategoryId"];
        }
    }
}
