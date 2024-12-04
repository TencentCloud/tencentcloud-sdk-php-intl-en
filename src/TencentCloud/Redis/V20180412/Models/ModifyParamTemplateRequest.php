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
 * ModifyParamTemplate request structure.
 *
 * @method string getTemplateId() Obtain Source parameter template ID, which can be obtained through the response parameter **TemplateId** of the API [DescribeParamTemplateInfo](https://intl.cloud.tencent.com/document/product/239/58748?from_cn_redirect=1).
 * @method void setTemplateId(string $TemplateId) Set Source parameter template ID, which can be obtained through the response parameter **TemplateId** of the API [DescribeParamTemplateInfo](https://intl.cloud.tencent.com/document/product/239/58748?from_cn_redirect=1).
 * @method string getName() Obtain New name after the parameter template is modified.
 * @method void setName(string $Name) Set New name after the parameter template is modified.
 * @method string getDescription() Obtain New description after the parameter template is modified.
 * @method void setDescription(string $Description) Set New description after the parameter template is modified.
 * @method array getParamList() Obtain New parameter list after the parameter template is modified.
 * @method void setParamList(array $ParamList) Set New parameter list after the parameter template is modified.
 */
class ModifyParamTemplateRequest extends AbstractModel
{
    /**
     * @var string Source parameter template ID, which can be obtained through the response parameter **TemplateId** of the API [DescribeParamTemplateInfo](https://intl.cloud.tencent.com/document/product/239/58748?from_cn_redirect=1).
     */
    public $TemplateId;

    /**
     * @var string New name after the parameter template is modified.
     */
    public $Name;

    /**
     * @var string New description after the parameter template is modified.
     */
    public $Description;

    /**
     * @var array New parameter list after the parameter template is modified.
     */
    public $ParamList;

    /**
     * @param string $TemplateId Source parameter template ID, which can be obtained through the response parameter **TemplateId** of the API [DescribeParamTemplateInfo](https://intl.cloud.tencent.com/document/product/239/58748?from_cn_redirect=1).
     * @param string $Name New name after the parameter template is modified.
     * @param string $Description New description after the parameter template is modified.
     * @param array $ParamList New parameter list after the parameter template is modified.
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
        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
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
