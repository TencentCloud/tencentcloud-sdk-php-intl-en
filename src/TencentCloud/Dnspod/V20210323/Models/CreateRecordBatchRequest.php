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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateRecordBatch request structure.
 *
 * @method array getDomainIdList() Obtain Domain ID. Separate multiple ones by comma.
 * @method void setDomainIdList(array $DomainIdList) Set Domain ID. Separate multiple ones by comma.
 * @method array getRecordList() Obtain Record array
 * @method void setRecordList(array $RecordList) Set Record array
 */
class CreateRecordBatchRequest extends AbstractModel
{
    /**
     * @var array Domain ID. Separate multiple ones by comma.
     */
    public $DomainIdList;

    /**
     * @var array Record array
     */
    public $RecordList;

    /**
     * @param array $DomainIdList Domain ID. Separate multiple ones by comma.
     * @param array $RecordList Record array
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
        if (array_key_exists("DomainIdList",$param) and $param["DomainIdList"] !== null) {
            $this->DomainIdList = $param["DomainIdList"];
        }

        if (array_key_exists("RecordList",$param) and $param["RecordList"] !== null) {
            $this->RecordList = [];
            foreach ($param["RecordList"] as $key => $value){
                $obj = new AddRecordBatch();
                $obj->deserialize($value);
                array_push($this->RecordList, $obj);
            }
        }
    }
}
