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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Types of exception events that can cause an exceptional experience
 *
 * @method integer getAbnormalEventId() Obtain Exception event ID. For specific values, please see Appendix. Exceptional Experience ID Mapping Table.
 * @method void setAbnormalEventId(integer $AbnormalEventId) Set Exception event ID. For specific values, please see Appendix. Exceptional Experience ID Mapping Table.
 * @method string getPeerId() Obtain Remote user ID. If this parameter is left empty, it indicates that the exception event is not caused by the remote user.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPeerId(string $PeerId) Set Remote user ID. If this parameter is left empty, it indicates that the exception event is not caused by the remote user.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class AbnormalEvent extends AbstractModel
{
    /**
     * @var integer Exception event ID. For specific values, please see Appendix. Exceptional Experience ID Mapping Table.
     */
    public $AbnormalEventId;

    /**
     * @var string Remote user ID. If this parameter is left empty, it indicates that the exception event is not caused by the remote user.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $PeerId;

    /**
     * @param integer $AbnormalEventId Exception event ID. For specific values, please see Appendix. Exceptional Experience ID Mapping Table.
     * @param string $PeerId Remote user ID. If this parameter is left empty, it indicates that the exception event is not caused by the remote user.
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("AbnormalEventId",$param) and $param["AbnormalEventId"] !== null) {
            $this->AbnormalEventId = $param["AbnormalEventId"];
        }

        if (array_key_exists("PeerId",$param) and $param["PeerId"] !== null) {
            $this->PeerId = $param["PeerId"];
        }
    }
}
