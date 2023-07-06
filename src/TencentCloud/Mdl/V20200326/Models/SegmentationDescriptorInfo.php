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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SCTE-35 configuration information.
 *
 * @method integer getEventID() Obtain A 32-bit unique segmentation event identifier. Only one occurrence of a given segmentation_event_id value shall be active at any one time.
 * @method void setEventID(integer $EventID) Set A 32-bit unique segmentation event identifier. Only one occurrence of a given segmentation_event_id value shall be active at any one time.
 * @method integer getEventCancelIndicator() Obtain Indicates that a previously sent segmentation event, identified by segmentation_event_id, has been cancelled.
 * @method void setEventCancelIndicator(integer $EventCancelIndicator) Set Indicates that a previously sent segmentation event, identified by segmentation_event_id, has been cancelled.
 * @method DeliveryRestrictionsInfo getDeliveryRestrictions() Obtain Distribution configuration.
 * @method void setDeliveryRestrictions(DeliveryRestrictionsInfo $DeliveryRestrictions) Set Distribution configuration.
 * @method integer getDuration() Obtain The duration of the segment in 90kHz ticks. indicat when the segment will be over and when the next segmentation message will occur.Shall be 0 for end messages.the time signal will continue until insert a cancellation message when not specify the duration.
 * @method void setDuration(integer $Duration) Set The duration of the segment in 90kHz ticks. indicat when the segment will be over and when the next segmentation message will occur.Shall be 0 for end messages.the time signal will continue until insert a cancellation message when not specify the duration.
 * @method integer getUPIDType() Obtain Corresponds to SCTE-35 segmentation_upid_type parameter.
 * @method void setUPIDType(integer $UPIDType) Set Corresponds to SCTE-35 segmentation_upid_type parameter.
 * @method string getUPID() Obtain Corresponds to SCTE-35 segmentation_upid. 
 * @method void setUPID(string $UPID) Set Corresponds to SCTE-35 segmentation_upid. 
 * @method integer getTypeID() Obtain Corresponds to SCTE-35 segmentation_type_id.
 * @method void setTypeID(integer $TypeID) Set Corresponds to SCTE-35 segmentation_type_id.
 * @method integer getNum() Obtain Corresponds to SCTE-35 segment_num。This field provides support for numbering segments within a given collection of segments.
 * @method void setNum(integer $Num) Set Corresponds to SCTE-35 segment_num。This field provides support for numbering segments within a given collection of segments.
 * @method integer getExpected() Obtain Corresponds to SCTE-35 segment_expected.This field provides a count of the expected number of individual segments within a collection of segments.
 * @method void setExpected(integer $Expected) Set Corresponds to SCTE-35 segment_expected.This field provides a count of the expected number of individual segments within a collection of segments.
 * @method integer getSubSegmentNum() Obtain Corresponds to SCTE-35 sub_segment_num.This field provides identification for a specific sub-segment within a collection of sub-segments.
 * @method void setSubSegmentNum(integer $SubSegmentNum) Set Corresponds to SCTE-35 sub_segment_num.This field provides identification for a specific sub-segment within a collection of sub-segments.
 * @method integer getSubSegmentsExpected() Obtain Corresponds to SCTE-35 sub_segments_expected.This field provides a count of the expected number of individual sub-segments within the collection of sub-segments.
 * @method void setSubSegmentsExpected(integer $SubSegmentsExpected) Set Corresponds to SCTE-35 sub_segments_expected.This field provides a count of the expected number of individual sub-segments within the collection of sub-segments.
 */
class SegmentationDescriptorInfo extends AbstractModel
{
    /**
     * @var integer A 32-bit unique segmentation event identifier. Only one occurrence of a given segmentation_event_id value shall be active at any one time.
     */
    public $EventID;

    /**
     * @var integer Indicates that a previously sent segmentation event, identified by segmentation_event_id, has been cancelled.
     */
    public $EventCancelIndicator;

    /**
     * @var DeliveryRestrictionsInfo Distribution configuration.
     */
    public $DeliveryRestrictions;

    /**
     * @var integer The duration of the segment in 90kHz ticks. indicat when the segment will be over and when the next segmentation message will occur.Shall be 0 for end messages.the time signal will continue until insert a cancellation message when not specify the duration.
     */
    public $Duration;

    /**
     * @var integer Corresponds to SCTE-35 segmentation_upid_type parameter.
     */
    public $UPIDType;

    /**
     * @var string Corresponds to SCTE-35 segmentation_upid. 
     */
    public $UPID;

    /**
     * @var integer Corresponds to SCTE-35 segmentation_type_id.
     */
    public $TypeID;

    /**
     * @var integer Corresponds to SCTE-35 segment_num。This field provides support for numbering segments within a given collection of segments.
     */
    public $Num;

    /**
     * @var integer Corresponds to SCTE-35 segment_expected.This field provides a count of the expected number of individual segments within a collection of segments.
     */
    public $Expected;

    /**
     * @var integer Corresponds to SCTE-35 sub_segment_num.This field provides identification for a specific sub-segment within a collection of sub-segments.
     */
    public $SubSegmentNum;

    /**
     * @var integer Corresponds to SCTE-35 sub_segments_expected.This field provides a count of the expected number of individual sub-segments within the collection of sub-segments.
     */
    public $SubSegmentsExpected;

    /**
     * @param integer $EventID A 32-bit unique segmentation event identifier. Only one occurrence of a given segmentation_event_id value shall be active at any one time.
     * @param integer $EventCancelIndicator Indicates that a previously sent segmentation event, identified by segmentation_event_id, has been cancelled.
     * @param DeliveryRestrictionsInfo $DeliveryRestrictions Distribution configuration.
     * @param integer $Duration The duration of the segment in 90kHz ticks. indicat when the segment will be over and when the next segmentation message will occur.Shall be 0 for end messages.the time signal will continue until insert a cancellation message when not specify the duration.
     * @param integer $UPIDType Corresponds to SCTE-35 segmentation_upid_type parameter.
     * @param string $UPID Corresponds to SCTE-35 segmentation_upid. 
     * @param integer $TypeID Corresponds to SCTE-35 segmentation_type_id.
     * @param integer $Num Corresponds to SCTE-35 segment_num。This field provides support for numbering segments within a given collection of segments.
     * @param integer $Expected Corresponds to SCTE-35 segment_expected.This field provides a count of the expected number of individual segments within a collection of segments.
     * @param integer $SubSegmentNum Corresponds to SCTE-35 sub_segment_num.This field provides identification for a specific sub-segment within a collection of sub-segments.
     * @param integer $SubSegmentsExpected Corresponds to SCTE-35 sub_segments_expected.This field provides a count of the expected number of individual sub-segments within the collection of sub-segments.
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
        if (array_key_exists("EventID",$param) and $param["EventID"] !== null) {
            $this->EventID = $param["EventID"];
        }

        if (array_key_exists("EventCancelIndicator",$param) and $param["EventCancelIndicator"] !== null) {
            $this->EventCancelIndicator = $param["EventCancelIndicator"];
        }

        if (array_key_exists("DeliveryRestrictions",$param) and $param["DeliveryRestrictions"] !== null) {
            $this->DeliveryRestrictions = new DeliveryRestrictionsInfo();
            $this->DeliveryRestrictions->deserialize($param["DeliveryRestrictions"]);
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("UPIDType",$param) and $param["UPIDType"] !== null) {
            $this->UPIDType = $param["UPIDType"];
        }

        if (array_key_exists("UPID",$param) and $param["UPID"] !== null) {
            $this->UPID = $param["UPID"];
        }

        if (array_key_exists("TypeID",$param) and $param["TypeID"] !== null) {
            $this->TypeID = $param["TypeID"];
        }

        if (array_key_exists("Num",$param) and $param["Num"] !== null) {
            $this->Num = $param["Num"];
        }

        if (array_key_exists("Expected",$param) and $param["Expected"] !== null) {
            $this->Expected = $param["Expected"];
        }

        if (array_key_exists("SubSegmentNum",$param) and $param["SubSegmentNum"] !== null) {
            $this->SubSegmentNum = $param["SubSegmentNum"];
        }

        if (array_key_exists("SubSegmentsExpected",$param) and $param["SubSegmentsExpected"] !== null) {
            $this->SubSegmentsExpected = $param["SubSegmentsExpected"];
        }
    }
}
