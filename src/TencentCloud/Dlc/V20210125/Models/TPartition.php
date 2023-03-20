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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Table partition information
 *
 * @method string getName() Obtain The field name.
 * @method void setName(string $Name) Set The field name.
 * @method string getType() Obtain The field type.
 * @method void setType(string $Type) Set The field type.
 * @method string getComment() Obtain The field description.
 * @method void setComment(string $Comment) Set The field description.
 * @method string getPartitionType() Obtain The partition type.
 * @method void setPartitionType(string $PartitionType) Set The partition type.
 * @method string getPartitionFormat() Obtain The partition format.
 * @method void setPartitionFormat(string $PartitionFormat) Set The partition format.
 * @method integer getPartitionDot() Obtain The separator count of the partition conversion policy.
 * @method void setPartitionDot(integer $PartitionDot) Set The separator count of the partition conversion policy.
 * @method string getTransform() Obtain The partition conversion policy.
 * @method void setTransform(string $Transform) Set The partition conversion policy.
 * @method array getTransformArgs() Obtain The policy parameters.
 * @method void setTransformArgs(array $TransformArgs) Set The policy parameters.
 */
class TPartition extends AbstractModel
{
    /**
     * @var string The field name.
     */
    public $Name;

    /**
     * @var string The field type.
     */
    public $Type;

    /**
     * @var string The field description.
     */
    public $Comment;

    /**
     * @var string The partition type.
     */
    public $PartitionType;

    /**
     * @var string The partition format.
     */
    public $PartitionFormat;

    /**
     * @var integer The separator count of the partition conversion policy.
     */
    public $PartitionDot;

    /**
     * @var string The partition conversion policy.
     */
    public $Transform;

    /**
     * @var array The policy parameters.
     */
    public $TransformArgs;

    /**
     * @param string $Name The field name.
     * @param string $Type The field type.
     * @param string $Comment The field description.
     * @param string $PartitionType The partition type.
     * @param string $PartitionFormat The partition format.
     * @param integer $PartitionDot The separator count of the partition conversion policy.
     * @param string $Transform The partition conversion policy.
     * @param array $TransformArgs The policy parameters.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("PartitionType",$param) and $param["PartitionType"] !== null) {
            $this->PartitionType = $param["PartitionType"];
        }

        if (array_key_exists("PartitionFormat",$param) and $param["PartitionFormat"] !== null) {
            $this->PartitionFormat = $param["PartitionFormat"];
        }

        if (array_key_exists("PartitionDot",$param) and $param["PartitionDot"] !== null) {
            $this->PartitionDot = $param["PartitionDot"];
        }

        if (array_key_exists("Transform",$param) and $param["Transform"] !== null) {
            $this->Transform = $param["Transform"];
        }

        if (array_key_exists("TransformArgs",$param) and $param["TransformArgs"] !== null) {
            $this->TransformArgs = $param["TransformArgs"];
        }
    }
}
