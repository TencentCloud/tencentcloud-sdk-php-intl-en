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
 * CNAME status
 *
 * @method string getRecordName() Obtain The domain name.
 * @method void setRecordName(string $RecordName) Set The domain name.
 * @method string getCname() Obtain The CNAME address.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCname(string $Cname) Set The CNAME address.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStatus() Obtain CNAME status. valid values:.
<li>`active`: activated</li>.
<li>`moved`: not effective;</li>.
 * @method void setStatus(string $Status) Set CNAME status. valid values:.
<li>`active`: activated</li>.
<li>`moved`: not effective;</li>.
 */
class CnameStatus extends AbstractModel
{
    /**
     * @var string The domain name.
     */
    public $RecordName;

    /**
     * @var string The CNAME address.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Cname;

    /**
     * @var string CNAME status. valid values:.
<li>`active`: activated</li>.
<li>`moved`: not effective;</li>.
     */
    public $Status;

    /**
     * @param string $RecordName The domain name.
     * @param string $Cname The CNAME address.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Status CNAME status. valid values:.
<li>`active`: activated</li>.
<li>`moved`: not effective;</li>.
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
        if (array_key_exists("RecordName",$param) and $param["RecordName"] !== null) {
            $this->RecordName = $param["RecordName"];
        }

        if (array_key_exists("Cname",$param) and $param["Cname"] !== null) {
            $this->Cname = $param["Cname"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
