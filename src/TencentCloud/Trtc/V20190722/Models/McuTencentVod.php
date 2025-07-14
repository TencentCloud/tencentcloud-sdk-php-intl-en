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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Mcu Relay Recording and Tencent VOD Parameters
 *
 * @method string getProcedure() Obtain Post-Upload Task Processing
Automatically initiates task flows after media uploads complete. Value = Task flow template name.
VOD supports creating and naming task flow templates.
Example: template_name
 * @method void setProcedure(string $Procedure) Set Post-Upload Task Processing
Automatically initiates task flows after media uploads complete. Value = Task flow template name.
VOD supports creating and naming task flow templates.
Example: template_name
 * @method integer getExpireTime() Obtain Media File Expiration Time
Absolute expiration time from current timestamp.
86400 = 1 day retention
0 = permanent storage (default)
Example: 86400
 * @method void setExpireTime(integer $ExpireTime) Set Media File Expiration Time
Absolute expiration time from current timestamp.
86400 = 1 day retention
0 = permanent storage (default)
Example: 86400
 * @method string getStorageRegion() Obtain Upload Region Specification
For users requiring specific upload regions.
Example: ap-shanghai
 * @method void setStorageRegion(string $StorageRegion) Set Upload Region Specification
For users requiring specific upload regions.
Example: ap-shanghai
 * @method integer getClassId() Obtain Category ID
Manages media classification. Obtain via category creation API.
Default: 0 (Other category)
Example: 0
 * @method void setClassId(integer $ClassId) Set Category ID
Manages media classification. Obtain via category creation API.
Default: 0 (Other category)
Example: 0
 * @method integer getSubAppId() Obtain VOD SubAppId
Required when accessing sub-application resources. Leave empty otherwise.
Example: 0
 * @method void setSubAppId(integer $SubAppId) Set VOD SubAppId
Required when accessing sub-application resources. Leave empty otherwise.
Example: 0
 * @method string getSessionContext() Obtain Task Flow Context
Passed through in task completion callbacks.
Example: user_custom
 * @method void setSessionContext(string $SessionContext) Set Task Flow Context
Passed through in task completion callbacks.
Example: user_custom
 * @method string getSourceContext() Obtain Upload Context
Passed through in upload completion callbacks.
Example: user_custom
 * @method void setSourceContext(string $SourceContext) Set Upload Context
Passed through in upload completion callbacks.
Example: user_custom
 */
class McuTencentVod extends AbstractModel
{
    /**
     * @var string Post-Upload Task Processing
Automatically initiates task flows after media uploads complete. Value = Task flow template name.
VOD supports creating and naming task flow templates.
Example: template_name
     */
    public $Procedure;

    /**
     * @var integer Media File Expiration Time
Absolute expiration time from current timestamp.
86400 = 1 day retention
0 = permanent storage (default)
Example: 86400
     */
    public $ExpireTime;

    /**
     * @var string Upload Region Specification
For users requiring specific upload regions.
Example: ap-shanghai
     */
    public $StorageRegion;

    /**
     * @var integer Category ID
Manages media classification. Obtain via category creation API.
Default: 0 (Other category)
Example: 0
     */
    public $ClassId;

    /**
     * @var integer VOD SubAppId
Required when accessing sub-application resources. Leave empty otherwise.
Example: 0
     */
    public $SubAppId;

    /**
     * @var string Task Flow Context
Passed through in task completion callbacks.
Example: user_custom
     */
    public $SessionContext;

    /**
     * @var string Upload Context
Passed through in upload completion callbacks.
Example: user_custom
     */
    public $SourceContext;

    /**
     * @param string $Procedure Post-Upload Task Processing
Automatically initiates task flows after media uploads complete. Value = Task flow template name.
VOD supports creating and naming task flow templates.
Example: template_name
     * @param integer $ExpireTime Media File Expiration Time
Absolute expiration time from current timestamp.
86400 = 1 day retention
0 = permanent storage (default)
Example: 86400
     * @param string $StorageRegion Upload Region Specification
For users requiring specific upload regions.
Example: ap-shanghai
     * @param integer $ClassId Category ID
Manages media classification. Obtain via category creation API.
Default: 0 (Other category)
Example: 0
     * @param integer $SubAppId VOD SubAppId
Required when accessing sub-application resources. Leave empty otherwise.
Example: 0
     * @param string $SessionContext Task Flow Context
Passed through in task completion callbacks.
Example: user_custom
     * @param string $SourceContext Upload Context
Passed through in upload completion callbacks.
Example: user_custom
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
        if (array_key_exists("Procedure",$param) and $param["Procedure"] !== null) {
            $this->Procedure = $param["Procedure"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("StorageRegion",$param) and $param["StorageRegion"] !== null) {
            $this->StorageRegion = $param["StorageRegion"];
        }

        if (array_key_exists("ClassId",$param) and $param["ClassId"] !== null) {
            $this->ClassId = $param["ClassId"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }

        if (array_key_exists("SourceContext",$param) and $param["SourceContext"] !== null) {
            $this->SourceContext = $param["SourceContext"];
        }
    }
}
