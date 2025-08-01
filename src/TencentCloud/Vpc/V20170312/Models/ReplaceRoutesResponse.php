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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ReplaceRoutes response structure.
 *
 * @method array getOldRouteSet() Obtain Old routing policy
 * @method void setOldRouteSet(array $OldRouteSet) Set Old routing policy
 * @method array getNewRouteSet() Obtain New routing policy
 * @method void setNewRouteSet(array $NewRouteSet) Set New routing policy
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class ReplaceRoutesResponse extends AbstractModel
{
    /**
     * @var array Old routing policy
     */
    public $OldRouteSet;

    /**
     * @var array New routing policy
     */
    public $NewRouteSet;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $OldRouteSet Old routing policy
     * @param array $NewRouteSet New routing policy
     * @param string $RequestId The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
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
        if (array_key_exists("OldRouteSet",$param) and $param["OldRouteSet"] !== null) {
            $this->OldRouteSet = [];
            foreach ($param["OldRouteSet"] as $key => $value){
                $obj = new Route();
                $obj->deserialize($value);
                array_push($this->OldRouteSet, $obj);
            }
        }

        if (array_key_exists("NewRouteSet",$param) and $param["NewRouteSet"] !== null) {
            $this->NewRouteSet = [];
            foreach ($param["NewRouteSet"] as $key => $value){
                $obj = new Route();
                $obj->deserialize($value);
                array_push($this->NewRouteSet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
