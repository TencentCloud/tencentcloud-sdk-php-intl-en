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
 * Configuration information of an event in the plan
 *
 * @method string getEventType() Obtain Valid values: INPUT_SWITCH, TIMED_RECORD, SCTE35_TIME_SIGNAL, SCTE35_SPLICE_INSERT, SCTE35_RETURN_TO_NETWORK.
 * @method void setEventType(string $EventType) Set Valid values: INPUT_SWITCH, TIMED_RECORD, SCTE35_TIME_SIGNAL, SCTE35_SPLICE_INSERT, SCTE35_RETURN_TO_NETWORK.
 * @method string getInputAttachment() Obtain ID of the input attached, which is not empty if `EventType` is `INPUT_SWITCH`
 * @method void setInputAttachment(string $InputAttachment) Set ID of the input attached, which is not empty if `EventType` is `INPUT_SWITCH`
 * @method string getOutputGroupName() Obtain Name of the output group attached. This parameter is not empty if `EventType` is `TIMED_RECORD`.
 * @method void setOutputGroupName(string $OutputGroupName) Set Name of the output group attached. This parameter is not empty if `EventType` is `TIMED_RECORD`.
 * @method string getManifestName() Obtain Name of the manifest file for timed recording, which ends with `.m3u8` for HLS and `.mpd` for DASH. This parameter is not empty if `EventType` is `TIMED_RECORD`.
 * @method void setManifestName(string $ManifestName) Set Name of the manifest file for timed recording, which ends with `.m3u8` for HLS and `.mpd` for DASH. This parameter is not empty if `EventType` is `TIMED_RECORD`.
 * @method array getDestinations() Obtain URL of the COS bucket where recording files are saved. This parameter is not empty if `EventType` is `TIMED_RECORD`. It may contain 1 or 2 URLs. The first URL corresponds to pipeline 0 and the second pipeline 1.
 * @method void setDestinations(array $Destinations) Set URL of the COS bucket where recording files are saved. This parameter is not empty if `EventType` is `TIMED_RECORD`. It may contain 1 or 2 URLs. The first URL corresponds to pipeline 0 and the second pipeline 1.
 * @method array getSCTE35SegmentationDescriptor() Obtain SCTE-35 configuration information.
 * @method void setSCTE35SegmentationDescriptor(array $SCTE35SegmentationDescriptor) Set SCTE-35 configuration information.
 * @method integer getSpliceEventID() Obtain A 32-bit unique segmentation event identifier.Only one occurrence of a given segmentation_event_id value shall be active at any one time.
 * @method void setSpliceEventID(integer $SpliceEventID) Set A 32-bit unique segmentation event identifier.Only one occurrence of a given segmentation_event_id value shall be active at any one time.
 * @method string getSpliceDuration() Obtain The duration of the segment in 90kHz ticks.It used to  give the splicer an indication of when the break will be over and when the network In Point will occur. If not specifyed,the splice_insert will continue when enter a return_to_network to end the splice_insert at the appropriate time.
 * @method void setSpliceDuration(string $SpliceDuration) Set The duration of the segment in 90kHz ticks.It used to  give the splicer an indication of when the break will be over and when the network In Point will occur. If not specifyed,the splice_insert will continue when enter a return_to_network to end the splice_insert at the appropriate time.
 * @method TimedMetadataInfo getTimedMetadataSetting() Obtain Meta information plan configuration.
 * @method void setTimedMetadataSetting(TimedMetadataInfo $TimedMetadataSetting) Set Meta information plan configuration.
 */
class EventSettingsResp extends AbstractModel
{
    /**
     * @var string Valid values: INPUT_SWITCH, TIMED_RECORD, SCTE35_TIME_SIGNAL, SCTE35_SPLICE_INSERT, SCTE35_RETURN_TO_NETWORK.
     */
    public $EventType;

    /**
     * @var string ID of the input attached, which is not empty if `EventType` is `INPUT_SWITCH`
     */
    public $InputAttachment;

    /**
     * @var string Name of the output group attached. This parameter is not empty if `EventType` is `TIMED_RECORD`.
     */
    public $OutputGroupName;

    /**
     * @var string Name of the manifest file for timed recording, which ends with `.m3u8` for HLS and `.mpd` for DASH. This parameter is not empty if `EventType` is `TIMED_RECORD`.
     */
    public $ManifestName;

    /**
     * @var array URL of the COS bucket where recording files are saved. This parameter is not empty if `EventType` is `TIMED_RECORD`. It may contain 1 or 2 URLs. The first URL corresponds to pipeline 0 and the second pipeline 1.
     */
    public $Destinations;

    /**
     * @var array SCTE-35 configuration information.
     */
    public $SCTE35SegmentationDescriptor;

    /**
     * @var integer A 32-bit unique segmentation event identifier.Only one occurrence of a given segmentation_event_id value shall be active at any one time.
     */
    public $SpliceEventID;

    /**
     * @var string The duration of the segment in 90kHz ticks.It used to  give the splicer an indication of when the break will be over and when the network In Point will occur. If not specifyed,the splice_insert will continue when enter a return_to_network to end the splice_insert at the appropriate time.
     */
    public $SpliceDuration;

    /**
     * @var TimedMetadataInfo Meta information plan configuration.
     */
    public $TimedMetadataSetting;

    /**
     * @param string $EventType Valid values: INPUT_SWITCH, TIMED_RECORD, SCTE35_TIME_SIGNAL, SCTE35_SPLICE_INSERT, SCTE35_RETURN_TO_NETWORK.
     * @param string $InputAttachment ID of the input attached, which is not empty if `EventType` is `INPUT_SWITCH`
     * @param string $OutputGroupName Name of the output group attached. This parameter is not empty if `EventType` is `TIMED_RECORD`.
     * @param string $ManifestName Name of the manifest file for timed recording, which ends with `.m3u8` for HLS and `.mpd` for DASH. This parameter is not empty if `EventType` is `TIMED_RECORD`.
     * @param array $Destinations URL of the COS bucket where recording files are saved. This parameter is not empty if `EventType` is `TIMED_RECORD`. It may contain 1 or 2 URLs. The first URL corresponds to pipeline 0 and the second pipeline 1.
     * @param array $SCTE35SegmentationDescriptor SCTE-35 configuration information.
     * @param integer $SpliceEventID A 32-bit unique segmentation event identifier.Only one occurrence of a given segmentation_event_id value shall be active at any one time.
     * @param string $SpliceDuration The duration of the segment in 90kHz ticks.It used to  give the splicer an indication of when the break will be over and when the network In Point will occur. If not specifyed,the splice_insert will continue when enter a return_to_network to end the splice_insert at the appropriate time.
     * @param TimedMetadataInfo $TimedMetadataSetting Meta information plan configuration.
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
        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("InputAttachment",$param) and $param["InputAttachment"] !== null) {
            $this->InputAttachment = $param["InputAttachment"];
        }

        if (array_key_exists("OutputGroupName",$param) and $param["OutputGroupName"] !== null) {
            $this->OutputGroupName = $param["OutputGroupName"];
        }

        if (array_key_exists("ManifestName",$param) and $param["ManifestName"] !== null) {
            $this->ManifestName = $param["ManifestName"];
        }

        if (array_key_exists("Destinations",$param) and $param["Destinations"] !== null) {
            $this->Destinations = [];
            foreach ($param["Destinations"] as $key => $value){
                $obj = new EventSettingsDestinationResp();
                $obj->deserialize($value);
                array_push($this->Destinations, $obj);
            }
        }

        if (array_key_exists("SCTE35SegmentationDescriptor",$param) and $param["SCTE35SegmentationDescriptor"] !== null) {
            $this->SCTE35SegmentationDescriptor = [];
            foreach ($param["SCTE35SegmentationDescriptor"] as $key => $value){
                $obj = new SegmentationDescriptorRespInfo();
                $obj->deserialize($value);
                array_push($this->SCTE35SegmentationDescriptor, $obj);
            }
        }

        if (array_key_exists("SpliceEventID",$param) and $param["SpliceEventID"] !== null) {
            $this->SpliceEventID = $param["SpliceEventID"];
        }

        if (array_key_exists("SpliceDuration",$param) and $param["SpliceDuration"] !== null) {
            $this->SpliceDuration = $param["SpliceDuration"];
        }

        if (array_key_exists("TimedMetadataSetting",$param) and $param["TimedMetadataSetting"] !== null) {
            $this->TimedMetadataSetting = new TimedMetadataInfo();
            $this->TimedMetadataSetting->deserialize($param["TimedMetadataSetting"]);
        }
    }
}
