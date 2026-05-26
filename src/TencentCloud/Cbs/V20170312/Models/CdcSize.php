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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method integer getDiskTotal() Obtain 
 * @method void setDiskTotal(integer $DiskTotal) Set 
 * @method integer getDiskAvailable() Obtain Specifies the available capacity size of the dedicated cluster in GiB.
 * @method void setDiskAvailable(integer $DiskAvailable) Set Specifies the available capacity size of the dedicated cluster in GiB.
 */
class CdcSize extends AbstractModel
{
    /**
     * @var integer 
     */
    public $DiskTotal;

    /**
     * @var integer Specifies the available capacity size of the dedicated cluster in GiB.
     */
    public $DiskAvailable;

    /**
     * @param integer $DiskTotal 
     * @param integer $DiskAvailable Specifies the available capacity size of the dedicated cluster in GiB.
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
        if (array_key_exists("DiskTotal",$param) and $param["DiskTotal"] !== null) {
            $this->DiskTotal = $param["DiskTotal"];
        }

        if (array_key_exists("DiskAvailable",$param) and $param["DiskAvailable"] !== null) {
            $this->DiskAvailable = $param["DiskAvailable"];
        }
    }
}
