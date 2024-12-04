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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateParamTemplate request structure.
 *
 * @method string getName() Obtain Parameter template name.
 * @method void setName(string $Name) Set Parameter template name.
 * @method string getDescription() Obtain Parameter template description.
 * @method void setDescription(string $Description) Set Parameter template description.
 * @method integer getProductType() Obtain Product type.
- 2: Redis 2.8 Memory Edition (standard architecture).
- 6: Redis 4.0 Memory Edition (standard architecture).
- 7: Redis 4.0 Memory Edition (cluster architecture).
- 8: Redis 5.0 Memory Edition (standard architecture).
- 9: Redis 5.0 Memory Edition (cluster architecture).
- 15: Redis 6.2 Memory Edition (standard architecture).
- 16: Redis 6.2 Memory Edition (cluster architecture).
- 17: Redis 7.0 Memory Edition (standard architecture).
- 18: Redis 7.0 Memory Edition (cluster architecture).
 * @method void setProductType(integer $ProductType) Set Product type.
- 2: Redis 2.8 Memory Edition (standard architecture).
- 6: Redis 4.0 Memory Edition (standard architecture).
- 7: Redis 4.0 Memory Edition (cluster architecture).
- 8: Redis 5.0 Memory Edition (standard architecture).
- 9: Redis 5.0 Memory Edition (cluster architecture).
- 15: Redis 6.2 Memory Edition (standard architecture).
- 16: Redis 6.2 Memory Edition (cluster architecture).
- 17: Redis 7.0 Memory Edition (standard architecture).
- 18: Redis 7.0 Memory Edition (cluster architecture).
 * @method string getTemplateId() Obtain ID of the source parameter template.
 * @method void setTemplateId(string $TemplateId) Set ID of the source parameter template.
 * @method array getParamList() Obtain Parameter list.
 * @method void setParamList(array $ParamList) Set Parameter list.
 */
class CreateParamTemplateRequest extends AbstractModel
{
    /**
     * @var string Parameter template name.
     */
    public $Name;

    /**
     * @var string Parameter template description.
     */
    public $Description;

    /**
     * @var integer Product type.
- 2: Redis 2.8 Memory Edition (standard architecture).
- 6: Redis 4.0 Memory Edition (standard architecture).
- 7: Redis 4.0 Memory Edition (cluster architecture).
- 8: Redis 5.0 Memory Edition (standard architecture).
- 9: Redis 5.0 Memory Edition (cluster architecture).
- 15: Redis 6.2 Memory Edition (standard architecture).
- 16: Redis 6.2 Memory Edition (cluster architecture).
- 17: Redis 7.0 Memory Edition (standard architecture).
- 18: Redis 7.0 Memory Edition (cluster architecture).
     */
    public $ProductType;

    /**
     * @var string ID of the source parameter template.
     */
    public $TemplateId;

    /**
     * @var array Parameter list.
     */
    public $ParamList;

    /**
     * @param string $Name Parameter template name.
     * @param string $Description Parameter template description.
     * @param integer $ProductType Product type.
- 2: Redis 2.8 Memory Edition (standard architecture).
- 6: Redis 4.0 Memory Edition (standard architecture).
- 7: Redis 4.0 Memory Edition (cluster architecture).
- 8: Redis 5.0 Memory Edition (standard architecture).
- 9: Redis 5.0 Memory Edition (cluster architecture).
- 15: Redis 6.2 Memory Edition (standard architecture).
- 16: Redis 6.2 Memory Edition (cluster architecture).
- 17: Redis 7.0 Memory Edition (standard architecture).
- 18: Redis 7.0 Memory Edition (cluster architecture).
     * @param string $TemplateId ID of the source parameter template.
     * @param array $ParamList Parameter list.
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ProductType",$param) and $param["ProductType"] !== null) {
            $this->ProductType = $param["ProductType"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("ParamList",$param) and $param["ParamList"] !== null) {
            $this->ParamList = [];
            foreach ($param["ParamList"] as $key => $value){
                $obj = new InstanceParam();
                $obj->deserialize($value);
                array_push($this->ParamList, $obj);
            }
        }
    }
}
