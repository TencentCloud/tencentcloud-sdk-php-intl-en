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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteProxyGroup request structure.
 *
 * @method string getGroupId() Obtain ID of the connection group to be deleted.
 * @method void setGroupId(string $GroupId) Set ID of the connection group to be deleted.
 * @method integer getForce() Obtain Whether to enable forced deletion. Valid values:
`0`: No;
`1`: Yes.
Default value: 0. If there is a connection or listener/rule bound to an origin server in the connection group and `Force` is 0, the operation will return a failure.
 * @method void setForce(integer $Force) Set Whether to enable forced deletion. Valid values:
`0`: No;
`1`: Yes.
Default value: 0. If there is a connection or listener/rule bound to an origin server in the connection group and `Force` is 0, the operation will return a failure.
 */
class DeleteProxyGroupRequest extends AbstractModel
{
    /**
     * @var string ID of the connection group to be deleted.
     */
    public $GroupId;

    /**
     * @var integer Whether to enable forced deletion. Valid values:
`0`: No;
`1`: Yes.
Default value: 0. If there is a connection or listener/rule bound to an origin server in the connection group and `Force` is 0, the operation will return a failure.
     */
    public $Force;

    /**
     * @param string $GroupId ID of the connection group to be deleted.
     * @param integer $Force Whether to enable forced deletion. Valid values:
`0`: No;
`1`: Yes.
Default value: 0. If there is a connection or listener/rule bound to an origin server in the connection group and `Force` is 0, the operation will return a failure.
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("Force",$param) and $param["Force"] !== null) {
            $this->Force = $param["Force"];
        }
    }
}
