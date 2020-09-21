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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Describes local disk specifications.
 *
 * @method string getType() Obtain Type of a local disk.
 * @method void setType(string $Type) Set Type of a local disk.
 * @method string getPartitionType() Obtain Attributes of a local disk.
 * @method void setPartitionType(string $PartitionType) Set Attributes of a local disk.
 * @method integer getMinSize() Obtain Minimum size of a local disk.
 * @method void setMinSize(integer $MinSize) Set Minimum size of a local disk.
 * @method integer getMaxSize() Obtain Maximum size of a local disk.
 * @method void setMaxSize(integer $MaxSize) Set Maximum size of a local disk.
 * @method string getRequired() Obtain Whether a local disk is required during purchase. Valid values:<br><li>REQUIRED: required<br><li>OPTIONAL: optional
 * @method void setRequired(string $Required) Set Whether a local disk is required during purchase. Valid values:<br><li>REQUIRED: required<br><li>OPTIONAL: optional
 */
class LocalDiskType extends AbstractModel
{
    /**
     * @var string Type of a local disk.
     */
    public $Type;

    /**
     * @var string Attributes of a local disk.
     */
    public $PartitionType;

    /**
     * @var integer Minimum size of a local disk.
     */
    public $MinSize;

    /**
     * @var integer Maximum size of a local disk.
     */
    public $MaxSize;

    /**
     * @var string Whether a local disk is required during purchase. Valid values:<br><li>REQUIRED: required<br><li>OPTIONAL: optional
     */
    public $Required;

    /**
     * @param string $Type Type of a local disk.
     * @param string $PartitionType Attributes of a local disk.
     * @param integer $MinSize Minimum size of a local disk.
     * @param integer $MaxSize Maximum size of a local disk.
     * @param string $Required Whether a local disk is required during purchase. Valid values:<br><li>REQUIRED: required<br><li>OPTIONAL: optional
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("PartitionType",$param) and $param["PartitionType"] !== null) {
            $this->PartitionType = $param["PartitionType"];
        }

        if (array_key_exists("MinSize",$param) and $param["MinSize"] !== null) {
            $this->MinSize = $param["MinSize"];
        }

        if (array_key_exists("MaxSize",$param) and $param["MaxSize"] !== null) {
            $this->MaxSize = $param["MaxSize"];
        }

        if (array_key_exists("Required",$param) and $param["Required"] !== null) {
            $this->Required = $param["Required"];
        }
    }
}
