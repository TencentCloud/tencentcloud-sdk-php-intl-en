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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Operation scope
 *
 * @method array getServiceInfoList() Obtain The information of the services to operate on.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setServiceInfoList(array $ServiceInfoList) Set The information of the services to operate on.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class OpScope extends AbstractModel
{
    /**
     * @var array The information of the services to operate on.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ServiceInfoList;

    /**
     * @param array $ServiceInfoList The information of the services to operate on.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("ServiceInfoList",$param) and $param["ServiceInfoList"] !== null) {
            $this->ServiceInfoList = [];
            foreach ($param["ServiceInfoList"] as $key => $value){
                $obj = new ServiceBasicRestartInfo();
                $obj->deserialize($value);
                array_push($this->ServiceInfoList, $obj);
            }
        }
    }
}
