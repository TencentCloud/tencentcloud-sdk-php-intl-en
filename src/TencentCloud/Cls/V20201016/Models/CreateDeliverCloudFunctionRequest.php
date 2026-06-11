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
 * CreateDeliverCloudFunction request structure.
 *
 * @method string getTopicId() Obtain TopicId to which the Shipping Rule belongs.
-Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
-Obtain the log topic Id through [Create Log Topic](https://www.tencentcloud.com/document/product/614/56456?from_cn_redirect=1).
 * @method void setTopicId(string $TopicId) Set TopicId to which the Shipping Rule belongs.
-Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
-Obtain the log topic Id through [Create Log Topic](https://www.tencentcloud.com/document/product/614/56456?from_cn_redirect=1).
 * @method string getFunctionName() Obtain Name of the cloud function for delivery. Only event functions (https://www.tencentcloud.com/document/product/583/9694?from_cn_redirect=1#scf-.E4.BA.8B.E4.BB.B6.E5.87.BD.E6.95.B0) (function type selection (https://www.tencentcloud.com/document/product/583/73483?from_cn_redirect=1)) are supported.
Get function information by [getting the function list](https://www.tencentcloud.com/document/product/583/18582?from_cn_redirect=1).
 * @method void setFunctionName(string $FunctionName) Set Name of the cloud function for delivery. Only event functions (https://www.tencentcloud.com/document/product/583/9694?from_cn_redirect=1#scf-.E4.BA.8B.E4.BB.B6.E5.87.BD.E6.95.B0) (function type selection (https://www.tencentcloud.com/document/product/583/73483?from_cn_redirect=1)) are supported.
Get function information by [getting the function list](https://www.tencentcloud.com/document/product/583/18582?from_cn_redirect=1).
 * @method string getNamespace() Obtain Namespace. See [Namespace management](https://www.tencentcloud.com/document/product/583/35913?from_cn_redirect=1).
-Obtain the Name by listing the namespace list (https://www.tencentcloud.com/document/product/583/37158?from_cn_redirect=1).
 * @method void setNamespace(string $Namespace) Set Namespace. See [Namespace management](https://www.tencentcloud.com/document/product/583/35913?from_cn_redirect=1).
-Obtain the Name by listing the namespace list (https://www.tencentcloud.com/document/product/583/37158?from_cn_redirect=1).
 * @method string getQualifier() Obtain Function version.
-Get the function version by [querying the function version](https://www.tencentcloud.com/document/product/583/37162?from_cn_redirect=1).
 * @method void setQualifier(string $Qualifier) Set Function version.
-Get the function version by [querying the function version](https://www.tencentcloud.com/document/product/583/37162?from_cn_redirect=1).
 * @method integer getTimeout() Obtain Maximum waiting time for delivery. Unit: seconds. Default: 60.
 * @method void setTimeout(integer $Timeout) Set Maximum waiting time for delivery. Unit: seconds. Default: 60.
 * @method integer getMaxMsgNum() Obtain Maximum number of messages to deliver. Default is 100. Supported range [1,10000].
 * @method void setMaxMsgNum(integer $MaxMsgNum) Set Maximum number of messages to deliver. Default is 100. Supported range [1,10000].
 */
class CreateDeliverCloudFunctionRequest extends AbstractModel
{
    /**
     * @var string TopicId to which the Shipping Rule belongs.
-Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
-Obtain the log topic Id through [Create Log Topic](https://www.tencentcloud.com/document/product/614/56456?from_cn_redirect=1).
     */
    public $TopicId;

    /**
     * @var string Name of the cloud function for delivery. Only event functions (https://www.tencentcloud.com/document/product/583/9694?from_cn_redirect=1#scf-.E4.BA.8B.E4.BB.B6.E5.87.BD.E6.95.B0) (function type selection (https://www.tencentcloud.com/document/product/583/73483?from_cn_redirect=1)) are supported.
Get function information by [getting the function list](https://www.tencentcloud.com/document/product/583/18582?from_cn_redirect=1).
     */
    public $FunctionName;

    /**
     * @var string Namespace. See [Namespace management](https://www.tencentcloud.com/document/product/583/35913?from_cn_redirect=1).
-Obtain the Name by listing the namespace list (https://www.tencentcloud.com/document/product/583/37158?from_cn_redirect=1).
     */
    public $Namespace;

    /**
     * @var string Function version.
-Get the function version by [querying the function version](https://www.tencentcloud.com/document/product/583/37162?from_cn_redirect=1).
     */
    public $Qualifier;

    /**
     * @var integer Maximum waiting time for delivery. Unit: seconds. Default: 60.
     */
    public $Timeout;

    /**
     * @var integer Maximum number of messages to deliver. Default is 100. Supported range [1,10000].
     */
    public $MaxMsgNum;

    /**
     * @param string $TopicId TopicId to which the Shipping Rule belongs.
-Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1).
-Obtain the log topic Id through [Create Log Topic](https://www.tencentcloud.com/document/product/614/56456?from_cn_redirect=1).
     * @param string $FunctionName Name of the cloud function for delivery. Only event functions (https://www.tencentcloud.com/document/product/583/9694?from_cn_redirect=1#scf-.E4.BA.8B.E4.BB.B6.E5.87.BD.E6.95.B0) (function type selection (https://www.tencentcloud.com/document/product/583/73483?from_cn_redirect=1)) are supported.
Get function information by [getting the function list](https://www.tencentcloud.com/document/product/583/18582?from_cn_redirect=1).
     * @param string $Namespace Namespace. See [Namespace management](https://www.tencentcloud.com/document/product/583/35913?from_cn_redirect=1).
-Obtain the Name by listing the namespace list (https://www.tencentcloud.com/document/product/583/37158?from_cn_redirect=1).
     * @param string $Qualifier Function version.
-Get the function version by [querying the function version](https://www.tencentcloud.com/document/product/583/37162?from_cn_redirect=1).
     * @param integer $Timeout Maximum waiting time for delivery. Unit: seconds. Default: 60.
     * @param integer $MaxMsgNum Maximum number of messages to deliver. Default is 100. Supported range [1,10000].
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

        if (array_key_exists("FunctionName",$param) and $param["FunctionName"] !== null) {
            $this->FunctionName = $param["FunctionName"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Qualifier",$param) and $param["Qualifier"] !== null) {
            $this->Qualifier = $param["Qualifier"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("MaxMsgNum",$param) and $param["MaxMsgNum"] !== null) {
            $this->MaxMsgNum = $param["MaxMsgNum"];
        }
    }
}
