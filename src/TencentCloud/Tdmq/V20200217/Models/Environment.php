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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Namespace information
 *
 * @method string getEnvironmentId() Obtain Namespace name
 * @method void setEnvironmentId(string $EnvironmentId) Set Namespace name
 * @method string getRemark() Obtain Remarks
 * @method void setRemark(string $Remark) Set Remarks
 * @method integer getMsgTTL() Obtain TTL for unconsumed messages in seconds. Maximum value: 1296000 seconds (i.e., 15 days)
 * @method void setMsgTTL(integer $MsgTTL) Set TTL for unconsumed messages in seconds. Maximum value: 1296000 seconds (i.e., 15 days)
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method string getUpdateTime() Obtain Modification time
 * @method void setUpdateTime(string $UpdateTime) Set Modification time
 * @method string getNamespaceId() Obtain Namespace ID
 * @method void setNamespaceId(string $NamespaceId) Set Namespace ID
 * @method string getNamespaceName() Obtain Namespace name
 * @method void setNamespaceName(string $NamespaceName) Set Namespace name
 * @method integer getTopicNum() Obtain Number of topics
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTopicNum(integer $TopicNum) Set Number of topics
Note: this field may return null, indicating that no valid values can be obtained.
 * @method RetentionPolicy getRetentionPolicy() Obtain Message retention policy
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRetentionPolicy(RetentionPolicy $RetentionPolicy) Set Message retention policy
Note: this field may return null, indicating that no valid values can be obtained.
 */
class Environment extends AbstractModel
{
    /**
     * @var string Namespace name
     */
    public $EnvironmentId;

    /**
     * @var string Remarks
     */
    public $Remark;

    /**
     * @var integer TTL for unconsumed messages in seconds. Maximum value: 1296000 seconds (i.e., 15 days)
     */
    public $MsgTTL;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var string Modification time
     */
    public $UpdateTime;

    /**
     * @var string Namespace ID
     */
    public $NamespaceId;

    /**
     * @var string Namespace name
     */
    public $NamespaceName;

    /**
     * @var integer Number of topics
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TopicNum;

    /**
     * @var RetentionPolicy Message retention policy
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $RetentionPolicy;

    /**
     * @param string $EnvironmentId Namespace name
     * @param string $Remark Remarks
     * @param integer $MsgTTL TTL for unconsumed messages in seconds. Maximum value: 1296000 seconds (i.e., 15 days)
     * @param string $CreateTime Creation time
     * @param string $UpdateTime Modification time
     * @param string $NamespaceId Namespace ID
     * @param string $NamespaceName Namespace name
     * @param integer $TopicNum Number of topics
Note: this field may return null, indicating that no valid values can be obtained.
     * @param RetentionPolicy $RetentionPolicy Message retention policy
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("MsgTTL",$param) and $param["MsgTTL"] !== null) {
            $this->MsgTTL = $param["MsgTTL"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
        }

        if (array_key_exists("NamespaceName",$param) and $param["NamespaceName"] !== null) {
            $this->NamespaceName = $param["NamespaceName"];
        }

        if (array_key_exists("TopicNum",$param) and $param["TopicNum"] !== null) {
            $this->TopicNum = $param["TopicNum"];
        }

        if (array_key_exists("RetentionPolicy",$param) and $param["RetentionPolicy"] !== null) {
            $this->RetentionPolicy = new RetentionPolicy();
            $this->RetentionPolicy->deserialize($param["RetentionPolicy"]);
        }
    }
}
