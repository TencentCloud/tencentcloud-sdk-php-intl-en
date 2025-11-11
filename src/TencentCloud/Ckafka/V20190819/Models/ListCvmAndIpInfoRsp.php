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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CVM and IP information list.
 *
 * @method array getCvmList() Obtain cvm and IP list.
 * @method void setCvmList(array $CvmList) Set cvm and IP list.
 * @method integer getTotalCount() Obtain Specifies the instance data volume.
 * @method void setTotalCount(integer $TotalCount) Set Specifies the instance data volume.
 */
class ListCvmAndIpInfoRsp extends AbstractModel
{
    /**
     * @var array cvm and IP list.
     */
    public $CvmList;

    /**
     * @var integer Specifies the instance data volume.
     */
    public $TotalCount;

    /**
     * @param array $CvmList cvm and IP list.
     * @param integer $TotalCount Specifies the instance data volume.
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
        if (array_key_exists("CvmList",$param) and $param["CvmList"] !== null) {
            $this->CvmList = [];
            foreach ($param["CvmList"] as $key => $value){
                $obj = new CvmAndIpInfo();
                $obj->deserialize($value);
                array_push($this->CvmList, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }
    }
}
