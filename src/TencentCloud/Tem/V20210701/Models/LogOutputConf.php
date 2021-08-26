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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Log output configuration
 *
 * @method string getOutputType() Obtain Log consumer type
 * @method void setOutputType(string $OutputType) Set Log consumer type
 * @method string getClsLogsetName() Obtain CLS logset
 * @method void setClsLogsetName(string $ClsLogsetName) Set CLS logset
 * @method string getClsLogTopicId() Obtain CLS log topic
 * @method void setClsLogTopicId(string $ClsLogTopicId) Set CLS log topic
 * @method string getClsLogsetId() Obtain CLS logset ID
 * @method void setClsLogsetId(string $ClsLogsetId) Set CLS logset ID
 * @method string getClsLogTopicName() Obtain CLS log topic name
 * @method void setClsLogTopicName(string $ClsLogTopicName) Set CLS log topic name
 */
class LogOutputConf extends AbstractModel
{
    /**
     * @var string Log consumer type
     */
    public $OutputType;

    /**
     * @var string CLS logset
     */
    public $ClsLogsetName;

    /**
     * @var string CLS log topic
     */
    public $ClsLogTopicId;

    /**
     * @var string CLS logset ID
     */
    public $ClsLogsetId;

    /**
     * @var string CLS log topic name
     */
    public $ClsLogTopicName;

    /**
     * @param string $OutputType Log consumer type
     * @param string $ClsLogsetName CLS logset
     * @param string $ClsLogTopicId CLS log topic
     * @param string $ClsLogsetId CLS logset ID
     * @param string $ClsLogTopicName CLS log topic name
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
        if (array_key_exists("OutputType",$param) and $param["OutputType"] !== null) {
            $this->OutputType = $param["OutputType"];
        }

        if (array_key_exists("ClsLogsetName",$param) and $param["ClsLogsetName"] !== null) {
            $this->ClsLogsetName = $param["ClsLogsetName"];
        }

        if (array_key_exists("ClsLogTopicId",$param) and $param["ClsLogTopicId"] !== null) {
            $this->ClsLogTopicId = $param["ClsLogTopicId"];
        }

        if (array_key_exists("ClsLogsetId",$param) and $param["ClsLogsetId"] !== null) {
            $this->ClsLogsetId = $param["ClsLogsetId"];
        }

        if (array_key_exists("ClsLogTopicName",$param) and $param["ClsLogTopicName"] !== null) {
            $this->ClsLogTopicName = $param["ClsLogTopicName"];
        }
    }
}
