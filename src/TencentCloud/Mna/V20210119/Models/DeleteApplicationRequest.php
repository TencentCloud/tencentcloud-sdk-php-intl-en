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
namespace TencentCloud\Mna\V20210119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteApplication request structure.
 *
 * @method array getMpApplicationIdList() Obtain Application ID list
 * @method void setMpApplicationIdList(array $MpApplicationIdList) Set Application ID list
 */
class DeleteApplicationRequest extends AbstractModel
{
    /**
     * @var array Application ID list
     */
    public $MpApplicationIdList;

    /**
     * @param array $MpApplicationIdList Application ID list
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
        if (array_key_exists("MpApplicationIdList",$param) and $param["MpApplicationIdList"] !== null) {
            $this->MpApplicationIdList = [];
            foreach ($param["MpApplicationIdList"] as $key => $value){
                $obj = new DelApplicationList();
                $obj->deserialize($value);
                array_push($this->MpApplicationIdList, $obj);
            }
        }
    }
}
