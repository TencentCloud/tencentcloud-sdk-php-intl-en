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
namespace TencentCloud\Tdid\V20210519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetDeployList request structure.
 *
 * @method string getClusterId() Obtain The network ID.
 * @method void setClusterId(string $ClusterId) Set The network ID.
 * @method integer getGroupId() Obtain The group ID.
 * @method void setGroupId(integer $GroupId) Set The group ID.
 * @method integer getDisplayStart() Obtain The start.
 * @method void setDisplayStart(integer $DisplayStart) Set The start.
 * @method integer getDisplayLength() Obtain The maximum number of records to return.
 * @method void setDisplayLength(integer $DisplayLength) Set The maximum number of records to return.
 */
class GetDeployListRequest extends AbstractModel
{
    /**
     * @var string The network ID.
     */
    public $ClusterId;

    /**
     * @var integer The group ID.
     */
    public $GroupId;

    /**
     * @var integer The start.
     */
    public $DisplayStart;

    /**
     * @var integer The maximum number of records to return.
     */
    public $DisplayLength;

    /**
     * @param string $ClusterId The network ID.
     * @param integer $GroupId The group ID.
     * @param integer $DisplayStart The start.
     * @param integer $DisplayLength The maximum number of records to return.
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("DisplayStart",$param) and $param["DisplayStart"] !== null) {
            $this->DisplayStart = $param["DisplayStart"];
        }

        if (array_key_exists("DisplayLength",$param) and $param["DisplayLength"] !== null) {
            $this->DisplayLength = $param["DisplayLength"];
        }
    }
}
