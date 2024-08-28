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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeHostInfo request structure.
 *
 * @method array getQuuidList() Obtain Host QUUID array
 * @method void setQuuidList(array $QuuidList) Set Host QUUID array
 * @method array getUuids() Obtain UUIDs for querying. Leave this parameter blank if QUUIDs are used for querying.
 * @method void setUuids(array $Uuids) Set UUIDs for querying. Leave this parameter blank if QUUIDs are used for querying.
 */
class DescribeHostInfoRequest extends AbstractModel
{
    /**
     * @var array Host QUUID array
     */
    public $QuuidList;

    /**
     * @var array UUIDs for querying. Leave this parameter blank if QUUIDs are used for querying.
     */
    public $Uuids;

    /**
     * @param array $QuuidList Host QUUID array
     * @param array $Uuids UUIDs for querying. Leave this parameter blank if QUUIDs are used for querying.
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
        if (array_key_exists("QuuidList",$param) and $param["QuuidList"] !== null) {
            $this->QuuidList = $param["QuuidList"];
        }

        if (array_key_exists("Uuids",$param) and $param["Uuids"] !== null) {
            $this->Uuids = $param["Uuids"];
        }
    }
}
