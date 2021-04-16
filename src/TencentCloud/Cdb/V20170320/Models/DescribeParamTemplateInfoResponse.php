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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeParamTemplateInfo response structure.
 *
 * @method integer getTemplateId() Obtain Parameter template ID.
 * @method void setTemplateId(integer $TemplateId) Set Parameter template ID.
 * @method string getName() Obtain Parameter template name.
 * @method void setName(string $Name) Set Parameter template name.
 * @method string getEngineVersion() Obtain Database engine version specified in the parameter template
 * @method void setEngineVersion(string $EngineVersion) Set Database engine version specified in the parameter template
 * @method integer getTotalCount() Obtain Number of parameters in the parameter template
 * @method void setTotalCount(integer $TotalCount) Set Number of parameters in the parameter template
 * @method array getItems() Obtain Parameter details
 * @method void setItems(array $Items) Set Parameter details
 * @method string getDescription() Obtain Parameter template description
 * @method void setDescription(string $Description) Set Parameter template description
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeParamTemplateInfoResponse extends AbstractModel
{
    /**
     * @var integer Parameter template ID.
     */
    public $TemplateId;

    /**
     * @var string Parameter template name.
     */
    public $Name;

    /**
     * @var string Database engine version specified in the parameter template
     */
    public $EngineVersion;

    /**
     * @var integer Number of parameters in the parameter template
     */
    public $TotalCount;

    /**
     * @var array Parameter details
     */
    public $Items;

    /**
     * @var string Parameter template description
     */
    public $Description;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $TemplateId Parameter template ID.
     * @param string $Name Parameter template name.
     * @param string $EngineVersion Database engine version specified in the parameter template
     * @param integer $TotalCount Number of parameters in the parameter template
     * @param array $Items Parameter details
     * @param string $Description Parameter template description
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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

        if (array_key_exists("EngineVersion",$param) and $param["EngineVersion"] !== null) {
            $this->EngineVersion = $param["EngineVersion"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new ParameterDetail();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
