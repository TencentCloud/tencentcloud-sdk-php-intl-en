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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateWorkflowRun request structure.
 *
 * @method string getAppId() Obtain <p>Application ID. For how to obtain it, see <a href="https://www.tencentcloud.com/document/product/1759/109469?from_cn_redirect=1#4eecb8c1-6ce4-45f5-8fa2-b269449d8efa">AppId</a></p>
 * @method void setAppId(string $AppId) Set <p>Application ID. For how to obtain it, see <a href="https://www.tencentcloud.com/document/product/1759/109469?from_cn_redirect=1#4eecb8c1-6ce4-45f5-8fa2-b269449d8efa">AppId</a></p>
 * @method integer getDomain() Obtain <p>Execution environment. 1: Development domain, 2: Production domain</p>
 * @method void setDomain(integer $Domain) Set <p>Execution environment. 1: Development domain, 2: Production domain</p>
 * @method string getQuery() Obtain <p>User input.</p>
 * @method void setQuery(string $Query) Set <p>User input.</p>
 * @method array getCustomVariableList() Obtain <p>API parameter configuration</p>
 * @method void setCustomVariableList(array $CustomVariableList) Set <p>API parameter configuration</p>
 * @method string getUserId() Obtain <p>uid</p>
 * @method void setUserId(string $UserId) Set <p>uid</p>
 */
class CreateWorkflowRunRequest extends AbstractModel
{
    /**
     * @var string <p>Application ID. For how to obtain it, see <a href="https://www.tencentcloud.com/document/product/1759/109469?from_cn_redirect=1#4eecb8c1-6ce4-45f5-8fa2-b269449d8efa">AppId</a></p>
     */
    public $AppId;

    /**
     * @var integer <p>Execution environment. 1: Development domain, 2: Production domain</p>
     */
    public $Domain;

    /**
     * @var string <p>User input.</p>
     */
    public $Query;

    /**
     * @var array <p>API parameter configuration</p>
     */
    public $CustomVariableList;

    /**
     * @var string <p>uid</p>
     */
    public $UserId;

    /**
     * @param string $AppId <p>Application ID. For how to obtain it, see <a href="https://www.tencentcloud.com/document/product/1759/109469?from_cn_redirect=1#4eecb8c1-6ce4-45f5-8fa2-b269449d8efa">AppId</a></p>
     * @param integer $Domain <p>Execution environment. 1: Development domain, 2: Production domain</p>
     * @param string $Query <p>User input.</p>
     * @param array $CustomVariableList <p>API parameter configuration</p>
     * @param string $UserId <p>uid</p>
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("CustomVariableList",$param) and $param["CustomVariableList"] !== null) {
            $this->CustomVariableList = [];
            foreach ($param["CustomVariableList"] as $key => $value){
                $obj = new CustomVariable();
                $obj->deserialize($value);
                array_push($this->CustomVariableList, $obj);
            }
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }
    }
}
