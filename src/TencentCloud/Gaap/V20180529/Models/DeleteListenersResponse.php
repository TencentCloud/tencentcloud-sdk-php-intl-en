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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteListeners response structure.
 *
 * @method array getOperationFailedListenerSet() Obtain ID list of listeners failed to be deleted
 * @method void setOperationFailedListenerSet(array $OperationFailedListenerSet) Set ID list of listeners failed to be deleted
 * @method array getOperationSucceedListenerSet() Obtain ID list of listeners deleted successfully
 * @method void setOperationSucceedListenerSet(array $OperationSucceedListenerSet) Set ID list of listeners deleted successfully
 * @method array getInvalidStatusListenerSet() Obtain ID list of invalid listeners. For example: the listener does not exist, or the instance corresponding to the listener does not match.
 * @method void setInvalidStatusListenerSet(array $InvalidStatusListenerSet) Set ID list of invalid listeners. For example: the listener does not exist, or the instance corresponding to the listener does not match.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DeleteListenersResponse extends AbstractModel
{
    /**
     * @var array ID list of listeners failed to be deleted
     */
    public $OperationFailedListenerSet;

    /**
     * @var array ID list of listeners deleted successfully
     */
    public $OperationSucceedListenerSet;

    /**
     * @var array ID list of invalid listeners. For example: the listener does not exist, or the instance corresponding to the listener does not match.
     */
    public $InvalidStatusListenerSet;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $OperationFailedListenerSet ID list of listeners failed to be deleted
     * @param array $OperationSucceedListenerSet ID list of listeners deleted successfully
     * @param array $InvalidStatusListenerSet ID list of invalid listeners. For example: the listener does not exist, or the instance corresponding to the listener does not match.
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
        if (array_key_exists("OperationFailedListenerSet",$param) and $param["OperationFailedListenerSet"] !== null) {
            $this->OperationFailedListenerSet = $param["OperationFailedListenerSet"];
        }

        if (array_key_exists("OperationSucceedListenerSet",$param) and $param["OperationSucceedListenerSet"] !== null) {
            $this->OperationSucceedListenerSet = $param["OperationSucceedListenerSet"];
        }

        if (array_key_exists("InvalidStatusListenerSet",$param) and $param["InvalidStatusListenerSet"] !== null) {
            $this->InvalidStatusListenerSet = $param["InvalidStatusListenerSet"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
