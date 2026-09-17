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
 * Target topic configuration
 *
 * @method integer getAccountType() Obtain <p>Target account type.</p><p>Enumeration values:</p><ul><li>1: Current root account</li><li>2: Other root account</li></ul>
 * @method void setAccountType(integer $AccountType) Set <p>Target account type.</p><p>Enumeration values:</p><ul><li>1: Current root account</li><li>2: Other root account</li></ul>
 * @method string getRegion() Obtain <p>Target region</p><p>Parameter format: ap-guangzhou</p>
 * @method void setRegion(string $Region) Set <p>Target region</p><p>Parameter format: ap-guangzhou</p>
 * @method string getLogsetId() Obtain <p>Target logset id</p>
 * @method void setLogsetId(string $LogsetId) Set <p>Target logset id</p>
 * @method string getTopicId() Obtain <p>Target log topic id.</p>
 * @method void setTopicId(string $TopicId) Set <p>Target log topic id.</p>
 * @method string getRoleArn() Obtain <p>Role ARN</p><p>Required when AccountType=2</p>
 * @method void setRoleArn(string $RoleArn) Set <p>Role ARN</p><p>Required when AccountType=2</p>
 * @method string getExternalId() Obtain <p>External ID</p><p>Required when AccountType=2</p>
 * @method void setExternalId(string $ExternalId) Set <p>External ID</p><p>Required when AccountType=2</p>
 */
class TargetTopicConfig extends AbstractModel
{
    /**
     * @var integer <p>Target account type.</p><p>Enumeration values:</p><ul><li>1: Current root account</li><li>2: Other root account</li></ul>
     */
    public $AccountType;

    /**
     * @var string <p>Target region</p><p>Parameter format: ap-guangzhou</p>
     */
    public $Region;

    /**
     * @var string <p>Target logset id</p>
     */
    public $LogsetId;

    /**
     * @var string <p>Target log topic id.</p>
     */
    public $TopicId;

    /**
     * @var string <p>Role ARN</p><p>Required when AccountType=2</p>
     */
    public $RoleArn;

    /**
     * @var string <p>External ID</p><p>Required when AccountType=2</p>
     */
    public $ExternalId;

    /**
     * @param integer $AccountType <p>Target account type.</p><p>Enumeration values:</p><ul><li>1: Current root account</li><li>2: Other root account</li></ul>
     * @param string $Region <p>Target region</p><p>Parameter format: ap-guangzhou</p>
     * @param string $LogsetId <p>Target logset id</p>
     * @param string $TopicId <p>Target log topic id.</p>
     * @param string $RoleArn <p>Role ARN</p><p>Required when AccountType=2</p>
     * @param string $ExternalId <p>External ID</p><p>Required when AccountType=2</p>
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
        if (array_key_exists("AccountType",$param) and $param["AccountType"] !== null) {
            $this->AccountType = $param["AccountType"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("RoleArn",$param) and $param["RoleArn"] !== null) {
            $this->RoleArn = $param["RoleArn"];
        }

        if (array_key_exists("ExternalId",$param) and $param["ExternalId"] !== null) {
            $this->ExternalId = $param["ExternalId"];
        }
    }
}
