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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RemoveUserFromGroup request structure.
 *
 * @method array getInfo() Obtain The user’s UIN/UID to be deleted and the array corresponding to the user group ID.
 * @method void setInfo(array $Info) Set The user’s UIN/UID to be deleted and the array corresponding to the user group ID.
 */
class RemoveUserFromGroupRequest extends AbstractModel
{
    /**
     * @var array The user’s UIN/UID to be deleted and the array corresponding to the user group ID.
     */
    public $Info;

    /**
     * @param array $Info The user’s UIN/UID to be deleted and the array corresponding to the user group ID.
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
        if (array_key_exists("Info",$param) and $param["Info"] !== null) {
            $this->Info = [];
            foreach ($param["Info"] as $key => $value){
                $obj = new GroupIdOfUidInfo();
                $obj->deserialize($value);
                array_push($this->Info, $obj);
            }
        }
    }
}
