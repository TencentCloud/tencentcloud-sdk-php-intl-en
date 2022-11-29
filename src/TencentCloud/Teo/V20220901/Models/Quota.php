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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Purging/Pre-warming available usage and quota
 *
 * @method integer getBatch() Obtain 
 * @method void setBatch(integer $Batch) Set 
 * @method integer getDaily() Obtain Daily submission quota limit.
 * @method void setDaily(integer $Daily) Set Daily submission quota limit.
 * @method integer getDailyAvailable() Obtain Remaining daily submission quota.
 * @method void setDailyAvailable(integer $DailyAvailable) Set Remaining daily submission quota.
 * @method string getType() Obtain Type of cache purging/pre-warming. Values:
<li>`purge_prefix`: Purge by prefix</li>
<li>`purge_url`: Purge by URL</li>
<li>`purge_host`: Purge by hostname</li>
<li>`purge_all`: Purge all caches</li>
<li>`purge_cache_tag`: Purge by cache tag</li><li>`prefetch_url`: Pre-warm by URL</li>
 * @method void setType(string $Type) Set Type of cache purging/pre-warming. Values:
<li>`purge_prefix`: Purge by prefix</li>
<li>`purge_url`: Purge by URL</li>
<li>`purge_host`: Purge by hostname</li>
<li>`purge_all`: Purge all caches</li>
<li>`purge_cache_tag`: Purge by cache tag</li><li>`prefetch_url`: Pre-warm by URL</li>
 */
class Quota extends AbstractModel
{
    /**
     * @var integer 
     */
    public $Batch;

    /**
     * @var integer Daily submission quota limit.
     */
    public $Daily;

    /**
     * @var integer Remaining daily submission quota.
     */
    public $DailyAvailable;

    /**
     * @var string Type of cache purging/pre-warming. Values:
<li>`purge_prefix`: Purge by prefix</li>
<li>`purge_url`: Purge by URL</li>
<li>`purge_host`: Purge by hostname</li>
<li>`purge_all`: Purge all caches</li>
<li>`purge_cache_tag`: Purge by cache tag</li><li>`prefetch_url`: Pre-warm by URL</li>
     */
    public $Type;

    /**
     * @param integer $Batch 
     * @param integer $Daily Daily submission quota limit.
     * @param integer $DailyAvailable Remaining daily submission quota.
     * @param string $Type Type of cache purging/pre-warming. Values:
<li>`purge_prefix`: Purge by prefix</li>
<li>`purge_url`: Purge by URL</li>
<li>`purge_host`: Purge by hostname</li>
<li>`purge_all`: Purge all caches</li>
<li>`purge_cache_tag`: Purge by cache tag</li><li>`prefetch_url`: Pre-warm by URL</li>
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
        if (array_key_exists("Batch",$param) and $param["Batch"] !== null) {
            $this->Batch = $param["Batch"];
        }

        if (array_key_exists("Daily",$param) and $param["Daily"] !== null) {
            $this->Daily = $param["Daily"];
        }

        if (array_key_exists("DailyAvailable",$param) and $param["DailyAvailable"] !== null) {
            $this->DailyAvailable = $param["DailyAvailable"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
