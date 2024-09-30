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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateQualityControlTemplate request structure.
 *
 * @method string getName() Obtain Media quality inspection template name, with a length limit of 64 characters.
 * @method void setName(string $Name) Set Media quality inspection template name, with a length limit of 64 characters.
 * @method array getQualityControlItemSet() Obtain Media quality inspection control parameters.
 * @method void setQualityControlItemSet(array $QualityControlItemSet) Set Media quality inspection control parameters.
 * @method string getComment() Obtain Media quality inspection template description, with a length limit of 256 characters.
 * @method void setComment(string $Comment) Set Media quality inspection template description, with a length limit of 256 characters.
 */
class CreateQualityControlTemplateRequest extends AbstractModel
{
    /**
     * @var string Media quality inspection template name, with a length limit of 64 characters.
     */
    public $Name;

    /**
     * @var array Media quality inspection control parameters.
     */
    public $QualityControlItemSet;

    /**
     * @var string Media quality inspection template description, with a length limit of 256 characters.
     */
    public $Comment;

    /**
     * @param string $Name Media quality inspection template name, with a length limit of 64 characters.
     * @param array $QualityControlItemSet Media quality inspection control parameters.
     * @param string $Comment Media quality inspection template description, with a length limit of 256 characters.
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

        if (array_key_exists("QualityControlItemSet",$param) and $param["QualityControlItemSet"] !== null) {
            $this->QualityControlItemSet = [];
            foreach ($param["QualityControlItemSet"] as $key => $value){
                $obj = new QualityControlItemConfig();
                $obj->deserialize($value);
                array_push($this->QualityControlItemSet, $obj);
            }
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }
    }
}
