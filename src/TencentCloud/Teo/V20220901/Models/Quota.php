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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Refresh/preheat available amount and quotas
 *
 * @method integer getBatch() Obtain Quota limit for a single batch submission.
 * @method void setBatch(integer $Batch) Set Quota limit for a single batch submission.
 * @method integer getDaily() Obtain Daily submission quota limit.
 * @method void setDaily(integer $Daily) Set Daily submission quota limit.
 * @method integer getDailyAvailable() Obtain Daily unconsumed submission quota.
 * @method void setDailyAvailable(integer $DailyAvailable) Set Daily unconsumed submission quota.
 * @method string getType() Obtain Purge and prefetch cache type. Valid values:
<li> purge_prefix: refresh by prefix;</li>
<li> purge_url: refresh by URL;</li>
<li> purge_host: refresh by Hostname;</li>
<li> purge_all: Refresh all cached content;</li>
<li> purge_cache_tag: refresh by cache tag;</li><li> prefetch_url: prefetch by url.</li>
 * @method void setType(string $Type) Set Purge and prefetch cache type. Valid values:
<li> purge_prefix: refresh by prefix;</li>
<li> purge_url: refresh by URL;</li>
<li> purge_host: refresh by Hostname;</li>
<li> purge_all: Refresh all cached content;</li>
<li> purge_cache_tag: refresh by cache tag;</li><li> prefetch_url: prefetch by url.</li>
 */
class Quota extends AbstractModel
{
    /**
     * @var integer Quota limit for a single batch submission.
     */
    public $Batch;

    /**
     * @var integer Daily submission quota limit.
     */
    public $Daily;

    /**
     * @var integer Daily unconsumed submission quota.
     */
    public $DailyAvailable;

    /**
     * @var string Purge and prefetch cache type. Valid values:
<li> purge_prefix: refresh by prefix;</li>
<li> purge_url: refresh by URL;</li>
<li> purge_host: refresh by Hostname;</li>
<li> purge_all: Refresh all cached content;</li>
<li> purge_cache_tag: refresh by cache tag;</li><li> prefetch_url: prefetch by url.</li>
     */
    public $Type;

    /**
     * @param integer $Batch Quota limit for a single batch submission.
     * @param integer $Daily Daily submission quota limit.
     * @param integer $DailyAvailable Daily unconsumed submission quota.
     * @param string $Type Purge and prefetch cache type. Valid values:
<li> purge_prefix: refresh by prefix;</li>
<li> purge_url: refresh by URL;</li>
<li> purge_host: refresh by Hostname;</li>
<li> purge_all: Refresh all cached content;</li>
<li> purge_cache_tag: refresh by cache tag;</li><li> prefetch_url: prefetch by url.</li>
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
