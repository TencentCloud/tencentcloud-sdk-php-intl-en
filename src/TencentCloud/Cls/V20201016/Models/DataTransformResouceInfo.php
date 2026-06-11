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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information about the resource for data processing
 *
 * @method string getTopicId() Obtain <p>Log topic ID</p><ul><li>Get the log topic ID by <a href="https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1">getting the log topic list</a>.</li></ul>
 * @method void setTopicId(string $TopicId) Set <p>Log topic ID</p><ul><li>Get the log topic ID by <a href="https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1">getting the log topic list</a>.</li></ul>
 * @method string getAlias() Obtain <p>Alias<br>Limitation: Cannot contain character |.</p>
 * @method void setAlias(string $Alias) Set <p>Alias<br>Limitation: Cannot contain character |.</p>
 * @method boolean getIsCrossAccount() Obtain <p>Whether it is a cross-account topic. false means it is not a cross-account topic, and true means it is a cross-account topic.</p><p>Default value: false</p>
 * @method void setIsCrossAccount(boolean $IsCrossAccount) Set <p>Whether it is a cross-account topic. false means it is not a cross-account topic, and true means it is a cross-account topic.</p><p>Default value: false</p>
 * @method string getRoleARN() Obtain <p>In a cross-account scenario, search for the role ARN value created by the delivery account for the shipping account in the roles of the shipping account.</p>
 * @method void setRoleARN(string $RoleARN) Set <p>In a cross-account scenario, search for the role ARN value created by the delivery account for the shipping account in the roles of the shipping account.</p>
 * @method string getExternalId() Obtain <p>External ID value. Can be found in the role-carrier of the shipping account.</p>
 * @method void setExternalId(string $ExternalId) Set <p>External ID value. Can be found in the role-carrier of the shipping account.</p>
 * @method string getTopicName() Obtain <p>topic name</p>
 * @method void setTopicName(string $TopicName) Set <p>topic name</p>
 * @method string getLogsetName() Obtain <p>Logset name</p>
 * @method void setLogsetName(string $LogsetName) Set <p>Logset name</p>
 */
class DataTransformResouceInfo extends AbstractModel
{
    /**
     * @var string <p>Log topic ID</p><ul><li>Get the log topic ID by <a href="https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1">getting the log topic list</a>.</li></ul>
     */
    public $TopicId;

    /**
     * @var string <p>Alias<br>Limitation: Cannot contain character |.</p>
     */
    public $Alias;

    /**
     * @var boolean <p>Whether it is a cross-account topic. false means it is not a cross-account topic, and true means it is a cross-account topic.</p><p>Default value: false</p>
     */
    public $IsCrossAccount;

    /**
     * @var string <p>In a cross-account scenario, search for the role ARN value created by the delivery account for the shipping account in the roles of the shipping account.</p>
     */
    public $RoleARN;

    /**
     * @var string <p>External ID value. Can be found in the role-carrier of the shipping account.</p>
     */
    public $ExternalId;

    /**
     * @var string <p>topic name</p>
     */
    public $TopicName;

    /**
     * @var string <p>Logset name</p>
     */
    public $LogsetName;

    /**
     * @param string $TopicId <p>Log topic ID</p><ul><li>Get the log topic ID by <a href="https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1">getting the log topic list</a>.</li></ul>
     * @param string $Alias <p>Alias<br>Limitation: Cannot contain character |.</p>
     * @param boolean $IsCrossAccount <p>Whether it is a cross-account topic. false means it is not a cross-account topic, and true means it is a cross-account topic.</p><p>Default value: false</p>
     * @param string $RoleARN <p>In a cross-account scenario, search for the role ARN value created by the delivery account for the shipping account in the roles of the shipping account.</p>
     * @param string $ExternalId <p>External ID value. Can be found in the role-carrier of the shipping account.</p>
     * @param string $TopicName <p>topic name</p>
     * @param string $LogsetName <p>Logset name</p>
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
        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("IsCrossAccount",$param) and $param["IsCrossAccount"] !== null) {
            $this->IsCrossAccount = $param["IsCrossAccount"];
        }

        if (array_key_exists("RoleARN",$param) and $param["RoleARN"] !== null) {
            $this->RoleARN = $param["RoleARN"];
        }

        if (array_key_exists("ExternalId",$param) and $param["ExternalId"] !== null) {
            $this->ExternalId = $param["ExternalId"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("LogsetName",$param) and $param["LogsetName"] !== null) {
            $this->LogsetName = $param["LogsetName"];
        }
    }
}
