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
 * The information of an error event (the possible cause of an abnormal user experience).
 *
 * @method integer getAbnormalEventId() Obtain Exception event ID. view the specific value in the appendix: abnormal experience ID [mapping table](https://trtc.io/document/37906)
 * @method void setAbnormalEventId(integer $AbnormalEventId) Set Exception event ID. view the specific value in the appendix: abnormal experience ID [mapping table](https://trtc.io/document/37906)
 * @method string getPeerId() Obtain Remote user ID,"": indicates the exception event is not user-generated.
 * @method void setPeerId(string $PeerId) Set Remote user ID,"": indicates the exception event is not user-generated.
 */
class AbnormalEvent extends AbstractModel
{
    /**
     * @var integer Exception event ID. view the specific value in the appendix: abnormal experience ID [mapping table](https://trtc.io/document/37906)
     */
    public $AbnormalEventId;

    /**
     * @var string Remote user ID,"": indicates the exception event is not user-generated.
     */
    public $PeerId;

    /**
     * @param integer $AbnormalEventId Exception event ID. view the specific value in the appendix: abnormal experience ID [mapping table](https://trtc.io/document/37906)
     * @param string $PeerId Remote user ID,"": indicates the exception event is not user-generated.
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
