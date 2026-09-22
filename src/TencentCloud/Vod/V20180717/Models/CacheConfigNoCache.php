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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Path cache no cache configuration
 *
 * @method string getSwitch() Obtain Path cache no cache configuration configuration switch. Value:
<li>`on`: Enable;</li>
<li>`off`: Cache.</li>
 * @method void setSwitch(string $Switch) Set Path cache no cache configuration configuration switch. Value:
<li>`on`: Enable;</li>
<li>`off`: Cache.</li>
 * @method string getRevalidate() Obtain Always validate with the origin server. Value:
<li>`on`: Enable;</li>
<li>`off`: Cache.</li>
 * @method void setRevalidate(string $Revalidate) Set Always validate with the origin server. Value:
<li>`on`: Enable;</li>
<li>`off`: Cache.</li>
 */
class CacheConfigNoCache extends AbstractModel
{
    /**
     * @var string Path cache no cache configuration configuration switch. Value:
<li>`on`: Enable;</li>
<li>`off`: Cache.</li>
     */
    public $Switch;

    /**
     * @var string Always validate with the origin server. Value:
<li>`on`: Enable;</li>
<li>`off`: Cache.</li>
     */
    public $Revalidate;

    /**
     * @param string $Switch Path cache no cache configuration configuration switch. Value:
<li>`on`: Enable;</li>
<li>`off`: Cache.</li>
     * @param string $Revalidate Always validate with the origin server. Value:
<li>`on`: Enable;</li>
<li>`off`: Cache.</li>
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("Revalidate",$param) and $param["Revalidate"] !== null) {
            $this->Revalidate = $param["Revalidate"];
        }
    }
}
